<?php
require_once "ADProductType_Function.php";
$txt_maloaisp=isset($_POST["txt_maloaisp"])?$_POST["txt_maloaisp"]:"";
$txt_tenloaisp=isset($_POST["txt_tenloaisp"])?$_POST["txt_tenloaisp"]:"";
$txt_motaloaisp=isset($_POST["txt_motaloaisp"])?$_POST["txt_motaloaisp"]:"";

if($_SERVER["REQUEST_METHOD"]== "POST"){
    if(isset($_POST["btn_submit"])){
        switch($_POST["btn_submit"]){
            case "Thêm mới":
                insertAdProductType($txt_maloaisp,$txt_tenloaisp,$txt_motaloaisp);
                break;
            case "delete":
                $id=$_GET["id"];
                deleteProductType($id);
                break;
}
}
}

?>
<form method="post">
    <table>
        <tr>
            <th colspan="5">Quản lý danh mục loại sản phẩm</th>
        </tr>
        <tr>
            <td colspan="5">
                <input type="text" name="txt_maloaisp" placeholder="Nhập mã loại sản phẩm" />

                <input type="text" name="txt_tenloaisp" placeholder="Nhập tên loại sản phẩm" />

                <input type="text" name="txt_motaloaisp" placeholder="Nhập mô tả loại sản phẩm" />

                <input type="submit" name="btn_submit" value="Thêm mới" />
            </td>
        
    </table>
</form>