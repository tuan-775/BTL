
<link href="public/style1.css" rel="stylesheet" />
<?php

require_once "tb_Function.php";
$txt_codenew = isset($_POST["txt_codenew"]) ? $_POST["txt_codenew"] : "";


$txt_titlenew = isset($_POST["txt_titlenew"]) ? $_POST["txt_titlenew"] : "";


$txt_content = isset($_POST["txt_content"]) ? $_POST["txt_content"] : "";
if($_SERVER["REQUEST_METHOD"]== "POST"){
    if(isset($_POST["btn_submit"])){
        switch($_POST["btn_submit"]){
            case "Thêm mới":
                insertProductCode($txt_codenew,$txt_titlenew,$txt_content);
                break;
          
}
}
}
$productType=getProductCode();
?>
<form method="post">
    <table border ="2">
        <tr>
            <th colspan="5">Quản lý danh mục loại sản phẩm</th>
        </tr>
        <tr>
            <td colspan="5">
                <input type="text" name="txt_codenew" placeholder="Nhập mã loại sản phẩm" />

                <input type="text" name="txt_titlenew" placeholder="Nhập tên loại sản phẩm" />

                <input type="text" name="txt_content" placeholder="Nhập mô tả loại sản phẩm" />

                <input type="submit" name="btn_submit" value="Thêm mới" />
            </td>
        <tr>
            <td>Mã loại sản phẩm</td>
            <td>Tên loại sản phẩm</td>
            <td>Mô tả loại sản phẩm</td>
            
        </tr>
        </tr>
        <?php foreach($productType as $k=>$v){?>
        <tr>
            <td><?php echo $v["code_new"]?></td>
            <td><?php echo $v["title_new"]?></td>
            <td><?php echo $v["content_new"]?></td>
            
        </tr>
        <?php } ?>
    </table>
</form>