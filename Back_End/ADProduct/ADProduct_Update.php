<?php
require_once "Back_End/ADProduct/ADProduct_Function.php";
$id=$_GET["id"];
$ProductID1=getProductID1($id);
$txt_maloaisp = isset($_POST["txt_maloaisp"]) ? $_POST["txt_maloaisp"] :$ProductID1["ma_loaisp"];
$txt_masp = isset($_POST["txt_masp"]) ? $_POST["txt_masp"] : $ProductID1["masp"];
$txt_tenloaisp = isset($_POST["txt_tenloaisp"]) ? $_POST["txt_tenloaisp"] : $ProductID1["tensp"];
$uploadfile = isset($_POST["uploadfile"]) ? $_POST["uploadfile"] :$ProductID1["hinhanh"];
$txt_gianhap = isset($_POST["txt_gianhap"]) ? $_POST["txt_gianhap"] : $ProductID1["gianhap"];
$txt_giaxuat = isset($_POST["txt_giaxuat"]) ? $_POST["txt_giaxuat"] : $ProductID1["giaxuat"];
$txt_khuyenmai = isset($_POST["txt_khuyenmai"]) ? $_POST["txt_khuyenmai"] :$ProductID1["khuyenmai"];
$txt_soluong = isset($_POST["txt_soluong"]) ? $_POST["txt_soluong"] : $ProductID1["soluong"];
$txt_mota = isset($_POST["txt_mota"]) ? $_POST["txt_mota"] : $ProductID1["mota_sp"];
$create_date = isset($_POST["create_date"]) ? $_POST["create_date"] :$ProductID1["create_date"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   updateProduct($txt_maloaisp, $txt_masp, $txt_tenloaisp, $uploadfile, $txt_gianhap, $txt_giaxuat, $txt_khuyenmai, $txt_soluong, $txt_mota, $create_date);
   echo "Bạn đã lưu thành công";
   header("location:Manager.php?action=AdProduct");
   exit();
}
?>
<form method="post">
    <table>
        <tr>
            <th colspan="2">Cập nhật loại sản phẩm</th>
        </tr>
        <tr>
            <td>Mã loại sản phẩm</td>
            <td>
                <input type="text" name="txt_maloaisp" readonly value="<?php echo $txt_maloaisp;?>" />
            </td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td>
                <input type="text" name="txt_masp" readonly value="<?php echo $txt_masp;?>" />
            </td>
        </tr>
        <tr>
            <td>Tên loại sản phẩm</td>
            <td>
                <input type="text" name="txt_tenloaisp" required value="<?php echo $txt_tenloaisp;?>" />
            </td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input type="file" name="uploadfile" value="<?php echo $uploadfile?>" />
            </td>
        </tr>
        <tr>
            <td>Giá nhập</td>
            <td>
                <input type="number" name="txt_gianhap" value="<?php echo $txt_gianhap;?>" />
            </td>
        </tr>
        <tr>
            <td>Giá xuất</td>
            <td>
                <input type="number" name="txt_giaxuat" value="<?php echo $txt_giaxuat;?>" />
            </td>
        </tr>
        <tr>
            <td>Khuyến mại</td>
            <td>
                <input type="number" name="txt_khuyenmai" value="<?php echo $txt_khuyenmai;?>" />
            </td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td>
                <input type="number" name="txt_soluong" value="<?php echo $txt_soluong;?>" />
            </td>
        </tr>
        <tr>
            <td>Mô tả loại sản phẩm</td>
            <td>
                <textarea name="txt_mota" cols="30" rows="8">
                    <?php echo $txt_mota;?>
               </textarea>
            </td>
        </tr>
        <tr>
            <td>Ngày tạo</td>
            <td>
                <input type="date" name="create_date" value="<?php echo $create_date;?>" />
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <input type="submit" name="btn_submit" value="Cập nhật" />
            </td>
        </tr>
    </table>
</form>