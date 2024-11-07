<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quản trị</title>
    <link href="public/style1.css" rel="stylesheet" />
</head>

<body>
    <?php
    require_once "Database.php";
    ?>
    <div class="main">
        <div class="header">
            <!-- <div class="header_1">
                <img src="public/images/anh2.jpg" width=" 100" />
                <?php
                if (isset($_SESSION["username"])) {
                    echo "Xin chao " . $_SESSION["username"];
                }
                //dem luot nguoi truy cap
                if (isset($_SESSION["counter"])) {
                    $_SESSION["counter"] += 1;
                } else {
                    $_SESSION["counter"] = 1;
                }
                echo " So luot truy cap " . $_SESSION["counter"];
                ?>
            </div> -->
            <img src="./public/images/logo.jpg" alt="#" width="100">
            <div class="header2"><?php require_once "pages/menu_frontend.php"; ?></div>
        </div>
        <div class="content">
            <?php
            if (isset($_GET["action"])) {
                $action = $_GET["action"];
                // echo $action;
                switch ($action) {
                    case "Home":
                        require_once "Front_end/Home.php";
                        break;
                    case "Product":
                        require_once "Front_end/Product.php";
                        break; 
                }
            }
            ?>
        </div>
        <div class="footer">
            @copyright Nguyễn Đình Tuấn
        </div>
    </div>
</body>

</html>