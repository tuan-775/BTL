<?php
require_once 'Database.php';

$search_name = '';
$search_code = '';
$min_price = '';
$max_price = '';
$all_products = [];

try {
    $conn = connect();

    $sql_all = "SELECT hinhanh, tensp, masp, giaxuat FROM ad_product";
    $stmt_all = $conn->prepare($sql_all);
    $stmt_all->execute();
    $all_products = $stmt_all->fetchAll(PDO::FETCH_ASSOC);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search_name'])) {
        $search_name = trim($_POST['search_name']);

        if (!empty($search_name)) {
            $sql_name = "SELECT hinhanh, tensp, masp, giaxuat FROM ad_product WHERE tensp LIKE :search_name";
            $stmt_name = $conn->prepare($sql_name);
            $stmt_name->bindValue(':search_name', '%' . $search_name . '%', PDO::PARAM_STR);
            $stmt_name->execute();
            $all_products = $stmt_name->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    // Tìm kiếm theo mã sản phẩm
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search_code'])) {
        $search_code = trim($_POST['search_code']);

        if (!empty($search_code)) {
            $sql_code = "SELECT hinhanh, tensp, masp, giaxuat FROM ad_product WHERE masp LIKE :search_code";
            $stmt_code = $conn->prepare($sql_code);
            $stmt_code->bindValue(':search_code', '%' . $search_code . '%', PDO::PARAM_STR);
            $stmt_code->execute();
            $all_products = $stmt_code->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    // Tìm kiếm theo giá
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['price_search'])) {
        $min_price = !empty($_POST['min_price']) ? (float) $_POST['min_price'] : null;
        $max_price = !empty($_POST['max_price']) ? (float) $_POST['max_price'] : null;

        if ($min_price !== null || $max_price !== null) {
            $sql_price = "SELECT hinhanh, tensp, masp, giaxuat FROM ad_product WHERE 1=1";

            if ($min_price !== null) {
                $sql_price .= " AND giaxuat >= :min_price";
            }
            if ($max_price !== null) {
                $sql_price .= " AND giaxuat <= :max_price";
            }

            $stmt_price = $conn->prepare($sql_price);

            if ($min_price !== null) {
                $stmt_price->bindValue(':min_price', $min_price, PDO::PARAM_INT);
            }
            if ($max_price !== null) {
                $stmt_price->bindValue(':max_price', $max_price, PDO::PARAM_INT);
            }

            $stmt_price->execute();
            $all_products = $stmt_price->fetchAll(PDO::FETCH_ASSOC);
        }
    }
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
    exit;
}
?>

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

        .product-item h3 {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .product-item p {
            margin: 5px 0;
        }

        .search-form {
            margin-bottom: 20px;
        }

        .search-form input,
        .search-form button {
            padding: 10px;
            margin-right: 10px;
        }
    </style>
</head>

<body>

    <h2>Tìm kiếm theo tên sản phẩm</h2>
    <form class="search-form" method="post" action="">
        <input type="text" name="search_name" placeholder="Tìm theo tên sản phẩm" value="<?php echo htmlspecialchars($search_name); ?>">
        <button type="submit">Tìm kiếm</button>
    </form>

    <h2>Tìm kiếm theo mã sản phẩm</h2>
    <form class="search-form" method="post" action="">
        <input type="text" name="search_code" placeholder="Tìm theo mã sản phẩm" value="<?php echo htmlspecialchars($search_code); ?>">
        <button type="submit">Tìm kiếm</button>
    </form>

    <h2>Tìm kiếm theo giá sản phẩm</h2>
    <form class="search-form" method="post" action="">
        <input type="number" name="min_price" placeholder="Giá tối thiểu" value="<?php echo htmlspecialchars($min_price); ?>">
        <input type="number" name="max_price" placeholder="Giá tối đa" value="<?php echo htmlspecialchars($max_price); ?>">
        <button type="submit" name="price_search">Tìm kiếm</button>
    </form>

    <div class="product-container">
        <?php
        if (!empty($all_products)) {
            foreach ($all_products as $row) {
                $image_path = 'public/' . htmlspecialchars($row['hinhanh']);

                if (!file_exists($image_path)) {
                    $image_path = 'public/default_image.jpg';
                }
        ?>
                <div class="product-item">
                    <img src="<?php echo $image_path; ?>" alt="<?php echo htmlspecialchars($row['tensp']); ?>" />
                    <h3><?php echo htmlspecialchars($row['tensp']); ?></h3>
                    <p><?php echo htmlspecialchars($row['masp']); ?></p>
                    <p><?php echo number_format($row['giaxuat']); ?> VND</p>
                </div>
        <?php
            }
        } else {
            echo "Không có sản phẩm nào phù hợp.";
        }
        ?>
    </div>

</body>

</html>