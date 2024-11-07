<link href="public/style1.css" rel="stylesheet" />

<?php
require_once("tb_Function.php");

/* 1 */
$txt_codenew = isset($_POST["txt_codenew"]) ? $_POST["txt_codenew"] : "";

/* 2 */
$txt_titlenew = isset($_POST["txt_titlenew"]) ? $_POST["txt_titlenew"] : "";

/* 3 */
$txt_content = isset($_POST["txt_content"]) ? $_POST["txt_content"] : "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["btn_submit"]) {
        switch ($_POST["btn_submit"]) {
            case "Thêm mới":
                insertProductCode($txt_codenew,$txt_titlenew,$txt_content);
                break;
        }
    }
}
$ProductTypeID = getProductCode();
?>

<form method="post">
    <table border="1">
        <tr>
            <th colspan="13">Quản lý danh mục sản phẩm</th>
        </tr>
        <tr>
            <td colspan="13">
                <a href="Manager.php?action=tinbai">Thêm mới</a>
            </td>
        </tr>
        <tr>
            <td align="center">Code</td>
            <td align="center">title</td>
            <td align="center">Content</td>
            
        </tr>
        <?php
        foreach ($ProductTypeID as $k => $v) {
        ?>
            <tr>
                <td align="center"><?php echo $v["code_new"] ?></td>
                <td><?php echo $v["title_new"] ?></td>
                <td><?php echo $v["content_new"] ?></td>
                <td><?php echo $v[10] ?></td>
                
            </tr>
        <?php } ?>
    </table>
</form>