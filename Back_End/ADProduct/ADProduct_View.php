<?php

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