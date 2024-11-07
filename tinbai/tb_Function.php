<?php
function insertProductCode(
	$code_new,$title_new,$content_new
) {
	$db = connect();
	//B1:check mã sản phẩm đã tồn tại chưa?
	$check = "SELECT COUNT(*) FROM tbl_new WHERE code_new='$code_new'";
	$stm = $db->prepare($check);
	$stm->execute();
	$count = $stm->fetchColumn();
	if ($count > 0) {
		echo "Đã tồn tại sản phẩm";
	} else {
		//B2:INSERT vào ad_product
		$sql = "INSERT INTO tbl_new(code_new,title_new,content_new)";
		$sql .= "VALUES('$code_new','$title_new','$content_new')";


		try {
			$stm = $db->prepare($sql);
			$stm->execute();
			echo "Bạn đã lưu thành công";
		} catch (PDOException $e) {
			echo "Bạn lưu không thành công" . $e->getMessage();
		}
	}
}
function getProductCode()
{
	$db = connect();
	$sql = "SELECT * FROM tbl_new";
	$stm = $db->prepare($sql);
	$stm->execute();
	$product = $stm->fetchAll();
	return $product;
}