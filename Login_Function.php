<?php
    function insertLogin(
        $uresname,
        $password
    ) {
        $db = connect();
        //B1:check mã sản phẩm đã tồn tại chưa?
        $check = "SELECT COUNT(*) FROM ures WHERE uresname='$uresname'";
        $stm = $db->prepare($check);
        $stm->execute();
        $count = $stm->fetchColumn();
        if ($count > 0) {
            echo "Đã tồn tại tài khoản";
        } else {
            //B2:INSERT vào ad_product
            $sql = "INSERT INTO ures(uresname,password)";
            $sql .= "VALUES('$uresname','$password')";
            try {
                $stm = $db->prepare($sql);
                $stm->execute();
                echo "Bạn đã lưu thành công";
            } catch (PDOException $e) {
                echo "Bạn lưu không thành công" . $e->getMessage();
            }
        }
    }

    function getUres($uresname,$password)
    {
        $db = connect();
        $sql = "SELECT * FROM ures WHERE uresname = '$uresname' AND password ='$password'";
        $stm = $db->prepare($sql);
        $stm->execute();
        $product = $stm->fetchAll();
        return $product;
    }
