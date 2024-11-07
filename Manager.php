<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quản trị</title>
    <link href="Public/style1.css" rel="stylesheet" />
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
            <div class="header2"><?php require_once "Pages/Menu_BackEnd.php"; ?></div>
        </div>
        <div class="content">
            <?php
            if (isset($_GET["action"])) {
                $action = $_GET["action"];
                // echo $action;
                switch ($action) {
                
                    case "ADProductType":
                        require_once "Back_End/ADProductType/ADProductType_View.php";
                        break;
                    case "UpdateAdProductType":
                        require_once "Back_end/ADProductType/ADProductType_Update.php";
                        break;
                    case "ADProduct":
                        require_once "Back_End/ADProduct/ADProduct_View.php";
                        break;
                    
                    case "AdProduct_add";
                        require_once("Back_End/ADProduct/ADProduct_Add.php");
                        break;
                    case "UpdateAddProduct1":
                        require_once("Back_End/ADProduct/ADProduct_Update.php");
                        break;
                    case "tinbai":
                        require_once("tinbai/tb_Add.php");
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