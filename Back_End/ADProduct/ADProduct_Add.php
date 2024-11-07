<?php
require_once "ADProduct_Function.php";
require_once "./Back_End/ADProductType/ADProductType_Function.php";
$productType=getProductType();
$txt_maloaisp=isset($_POST["txt_maloaisp"])?$_POST["txt_maloaisp"]:"";
$txt_masp=isset($_POST["txt_masp"])?$_POST["txt_masp"]:"";
$txt_tensp=isset($_POST["txt_tensp"])?$_POST["txt_tensp"]:"";
$txt_hinhanh=isset($_FILES["uploadfile"])?$_FILES["uploadfile"]["name"]:"";
$txt_gn=isset($_POST["txt_gn"])?$_POST["txt_gn"]:"";
$txt_gx=isset($_POST["txt_gx"])?$_POST["txt_gx"]:"";
$txt_khuyenmai=isset($_POST["txt_khuyemai"])?$_POST["txt_khuyemai"]:"";
$txt_soluong=isset($_POST["txt_soluong"])?$_POST["txt_soluong"]:"";
$txt_motasp=isset($_POST["txt_motasp"])?$_POST["txt_motasp"]:"";
$create_date=isset($_POST["create_date"])?$_POST["create_date"]:"";
$txt_flag=isset($_POST["txt_flag"])?$_POST["txt_flag"]:"";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_FILES["uploadfile"])){
				//$file_name=isset($_FILES["uploadfile"])?$_FILES["uploadfile"]["name"]:"";
			$file_tmp=$_FILES["uploadfile"]["tmp_name"];
			move_uploaded_file($file_tmp,"./public/".$txt_hinhanh);
		}
	insertProduct($txt_maloaisp,$txt_masp,$txt_tensp,$txt_hinhanh,$txt_gn,$txt_gx,$txt_khuyenmai,$txt_soluong,$txt_motasp,$create_date,$txt_flag);
}
?>
<form method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td colspan="2">Thêm mới sản phẩm</td>
        </tr>
        <tr>
            <td>Mã loại sản phẩm</td>
            <td>
                <select name="txt_maloaisp">
                    <?php foreach ($productType as $k=>$v){?>
                    <option value="<?php echo $v[0]?>">
                        <?php echo$v[0]?>
                    </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td>
                <input name="txt_masp" type="text" required />
            </td>
        </tr>
        <tr>
            <td>Tên sản phẩm</td>
            <td>
                <input name="txt_tensp" type="text" required />
            </td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input name="uploadfile" type="file" />
            </td>
        </tr>
        <tr>
            <td>Giá nhập</td>
            <td>
                <input name="txt_gn" type="number" required />
            </td>
        </tr>
        <tr>
            <td>Giá xuất</td>
            <td>
                <input name="txt_gx" type="number" required />
            </td>
        </tr>
        <tr>
            <td>Khuyến mại</td>
            <td>
                <input name="txt_khuyemai" type="number" />
            </td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td>
                <input name="txt_soluong" type="number" required />
            </td>
        </tr>
        <tr>
            <td>Mô tả sản phẩm</td>
            <td>
                <textarea name="txt_motasp" cols="30" rows="7">
            </textarea>
            </td>
        </tr>
        <tr>
            <td>Ngày tạo</td>
            <td>
                <input name="create_date" type="Date" required />
            </td>
        </tr>
        <tr>
            <td>Lựa chọn</td>
            <td>
                <input name="txt_flag" type="checkbox" value="nổi bật" />Sản phẩm nổi bật
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="btn_submit" value="Thêm mới" />
            </td>
        </tr>
    </table>
</form>