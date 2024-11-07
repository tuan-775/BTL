<link href="public/style1.css" rel="stylesheet" />

<?php
require_once "./Back_End/ADProductType/ADProductType_Function.php";
require_once("ADProduct_Function.php");

/* 1 */
$txt_maloaisp = isset($_POST["txt_maloaisp"]) ? $_POST["txt_maloaisp"] : "";

/* 2 */
$txt_masp = isset($_POST["txt_masp"]) ? $_POST["txt_masp"] : "";

/* 3 */
$txt_tensp = isset($_POST["txt_tensp"]) ? $_POST["txt_tensp"] : "";

/* 4 */
$hinhanh = isset($_FILES["uploadfile"]) ? $_FILES["uploadfile"]["name"] : "";

/* 5 */
$txt_gianhap = isset($_POST["txt_gianhap"]) ? $_POST["txt_gianhap"] : "";

/* 6 */
$txt_giaxuat = isset($_POST["txt_giaxuat"]) ? $_POST["txt_giaxuat"] : "";

/* 7 */
$txt_khuyenmai = isset($_POST["txt_khuyenmai"]) ? $_POST["txt_khuyenmai"] : "";

/* 8 */
$txt_soluong = isset($_POST["txt_soluong"]) ? $_POST["txt_soluong"] : "";

/* 9 */
$txt_motasp = isset($_POST["txt_motasp"]) ? $_POST["txt_motasp"] : "";

/* 10 */
$create_date = isset($_POST["create_date"]) ? $_POST["create_date"] : "";

/* 11 */
$txt_flag = isset($_POST["txt_flag"]) ? $_POST["txt_flag"] : "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["btn_submit"]) {
        switch ($_POST["btn_submit"]) {
            case "delete":
                $id = $_GET["id"];
                echo $id;
                deleteProduct($id);
                break;
        }
    }
}
$ProductTypeID = getProduct();
?>

<form method="post">
    <table border="1">
        <tr>
            <th colspan="13">Quản lý danh mục sản phẩm</th>
        </tr>
        <tr>
            <td colspan="13">
                <a href="Manager.php?action=AdProduct_add">Thêm mới</a>
            </td>
        </tr>
        <tr>
            <td align="center">Mã loại sản phẩm</td>
            <td align="center">Mã sản phẩm</td>
            <td align="center">Tên loại sản phẩm</td>
            <td align="center">Hình ảnh</td>
            <td align="center">Giá nhập</td>
            <td align="center">Giá xuất</td>
            <td align="center">Khuyến mãi</td>
            <td align="center">Số lượng</td>
            <td align="center">Mô tả loại sản phẩm</td>
            <td align="center">Ngày nhập</td>
            <td align="center">Cờ</td>
            <td align="center">Cập nhật</td>
            <td align="center">Xóa</td>
        </tr>
        <?php
        foreach ($ProductTypeID as $k => $v) {
        ?>
            <tr>
                <td align="center"><?php echo $v[0] ?></td>
                <td><?php echo $v[1] ?></td>
                <td><?php echo $v[2] ?></td>
                <td><img src="./public/<?php echo $v[3] ?>" width="100" /></td>
                <td><?php echo $v[4] ?></td>
                <td><?php echo $v[5] ?></td>
                <td><?php echo $v[6] ?></td>
                <td><?php echo $v[7] ?></td>
                <td><?php echo $v[8] ?></td>
                <td><?php echo $v[9] ?></td>
                <td><?php echo $v[10] ?></td>
                <td>
                    <a href="Manager.php?action=UpdateAddProduct1&id=<?php echo $v["ma_loaisp"]; ?>">
                        Cập nhật
                    </a>
                </td>
                <td>
                    <button type="submit" name="btn_submit" value="delete"
                        formaction="Manager.php?action=AdProduct&id=<?php echo $v[1] ?>"
                        onclick="return confirm('Bạn có chắc chắn xóa không?')">Xóa</button>
                </td>
            </tr>
        <?php } ?>
    </table>
</form>