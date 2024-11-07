<?php
require_once "ADProductType_Function.php";
$txt_maloaisp=isset($_POST["txt_maloaisp"])?$_POST["txt_maloaisp"]:"";
$txt_tenloaisp=isset($_POST["txt_tenloaisp"])?$_POST["txt_tenloaisp"]:"";
$txt_motaloaisp=isset($_POST["txt_motaloaisp"])?$_POST["txt_motaloaisp"]:"";
// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     insertAdProductType($txt_maloaisp,
//            $txt_tenloaisp,$txt_motaloaisp);
// }
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
$productType=getProductType();

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
        <tr>
            <td>Mã loại sản phẩm</td>
            <td>Tên loại sản phẩm</td>
            <td>Mô tả loại sản phẩm</td>
            <td>Cập nhật</td>
            <td>Xoá</td>
        </tr>
        </tr>
        <?php foreach($productType as $k=>$v){?>
        <tr>
            <td><?php echo $v["ma_loaisp"]?></td>
            <td><?php echo $v["ten_loaisp"]?></td>
            <td><?php echo $v["mota_loaisp"]?></td>
            <td>
                <a href="Manager.php?action=UpdateAdProductType&id=<?php echo $v["ma_loaisp"];?>">
                    Cập nhật
                </a>
            </td>
            <td>
                <button type="submit" name="btn_submit" value="delete"
                    formaction="Manager.php?action=AdProductType&id=<?php echo $v["ma_loaisp"];?>"
                    onclick="return confirm('bạn có muốn xóa không')">
                    Xóa
                </button>
            </td>
        </tr>
        <?php } ?>
    </table>
</form>