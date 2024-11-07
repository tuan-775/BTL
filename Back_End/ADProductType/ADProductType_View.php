<?php
require_once "ADProductType_Function.php";
$productType=getProductType();
?>
<form method="post">
    <table >
        <tr>
            <th colspan="13">Quản lý danh mục sản phẩm</th>
        </tr>
        <tr>
            <td colspan="13">
                <a href="Manager.php?action=ADProductType_Add">Thêm mới</a>
            </td>
        </tr>
    </table>
    <table border="1">
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
                    formaction="Manager.php?action=ADProductType_Add&id=<?php echo $v["ma_loaisp"];?>"
                    onclick="return confirm('bạn có muốn xóa không')">
                    Xóa
                </button>
            </td>
        </tr>
        <?php } ?>
    </table>
</form>