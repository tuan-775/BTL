<?php
require_once("ADProductType_Function.php");
$id=$_GET["id"];
$ProductTypeID=getProductTypeID($id);
$txt_maloaisp=isset($_POST["txt_maloaisp"])?$_POST["txt_maloaisp"]:$ProductTypeID[0];
$txt_tenloaisp=isset($_POST["txt_tenloaisp"])?$_POST["txt_tenloaisp"]:$ProductTypeID[1];
$txt_motaloaisp=isset($_POST["txt_motaloaisp"])?$_POST["txt_motaloaisp"]:$ProductTypeID[2];
if($_SERVER["REQUEST_METHOD"]=="POST"){
	UpdateadProductType($txt_maloaisp,$txt_tenloaisp,$txt_motaloaisp);
	echo"Bạn đã lưu thành công";
	header("location:Manager.php?action=ADProductType");
	exit();
  }


?>
<form method="post">
    <table width="700">
        <tr>
            <th colspan="2">Cập nhật danh mục sản phẩm</th>
        </tr>
        <tr>
            <td>Mã loại sản phẩm</td>
            <td>
                <input type="text" name="txt_maloaisp" readonly value="<?php echo $txt_maloaisp?>" />
            </td>
        </tr>
        <tr>
            <td>Tên loại sản phẩm</td>
            <td>
                <input type="text" name="txt_tenloaisp" value="<?php echo $txt_tenloaisp?>" />
            </td>
        </tr>
        <tr>
            <td>Mô tả loại sản phẩm</td>
            <td>
                <textarea name="txt_motaloaisp">
        <?php echo $txt_motaloaisp?>
      </textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="btn_submit" value="Cập nhật" />
            </td>
        </tr>
    </table>

</form>