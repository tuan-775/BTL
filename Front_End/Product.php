<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .product-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .product-item {
            flex: 1 1 calc(25% - 20px);
            margin: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 10px;
            background-color: #fff;
            text-align: center;
        }

        .product-item img {
            max-width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php
    require_once 'Database.php';
    require_once "Back_End/ADProduct/ADProduct_Function.php";

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $listProduct = getProductID1($id);
    } else {
        $listProduct = getProduct();
    }
    ?>

    <div class="product-container">
        <?php
        foreach ($listProduct as $k => $v) {
        ?>
            <div class="product-item">
                <img src="./public/<?php echo $v["hinhanh"] ?>" />
                </br>
                <?php
                echo $v["tensp"] . "</br>";
                echo $v["giaxuat"] . "</br>";
                ?>
            </div>
        <?php } ?>
    </div>

</body>
</html>