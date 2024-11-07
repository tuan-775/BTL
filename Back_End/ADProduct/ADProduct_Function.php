<?php
function insertProduct(
	$ma_loaisp,
	$masp,
	$tensp,
	$hinhanh,
	$gianhap,
	$giaxuat,
	$khuyenmai,
	$soluong,
	$mota_sp,
	$create_date,
	$flag
) {
	$db = connect();
	//B1:check mã sản phẩm đã tồn tại chưa?
	$check = "SELECT COUNT(*) FROM ad_product WHERE masp='$masp'";
	$stm = $db->prepare($check);
	$stm->execute();
	$count = $stm->fetchColumn();
	if ($count > 0) {
		echo "Đã tồn tại sản phẩm";
	} else {
		//B2:INSERT vào ad_product
		$sql = "INSERT INTO adproduct(ma_loaisp,masp,tensp,hinhanh,gianhap,giaxuat,khuyenmai,
 soluong,mota_sp,create_date,flag)";
		$sql .= "VALUES('$ma_loaisp','$masp','$tensp','$hinhanh','$gianhap','$giaxuat','$khuyenmai',
 '$soluong','$mota_sp','$create_date','$flag')";


		try {
			$stm = $db->prepare($sql);
			$stm->execute();
			echo "Bạn đã lưu thành công";
		} catch (PDOException $e) {
			echo "Bạn lưu không thành công" . $e->getMessage();
		}
	}
}
function getProduct()
{
	$db = connect();
	$sql = "SELECT * FROM ad_product";
	$stm = $db->prepare($sql);
	$stm->execute();
	$product = $stm->fetchAll();
	return $product;
}

function deleteProduct($masp)
{
	$db = connect();
	$sql = "DELETE FROM ad_product WHERE masp='$masp'";
	$db->exec($sql);
}
function updateProduct($ma_loaisp, $masp, $tensp, $hinhanh, $gianhap, $giaxuat, $khuyenmai, $soluong, $mota_Sp, $create_date)
{
	$db = connect();
	$sql = "UPDATE ad_product SET masp ='$masp',";
	$sql .= "tensp = '$tensp',hinhanh = '$hinhanh',gianhap = '$gianhap',giaxuat ='$giaxuat', khuyenmai ='$khuyenmai',
			soluong = '$soluong', mota_Sp = '$mota_Sp', create_date = '$create_date'
			WHERE masp = '$masp' ";
	$db->exec($sql);
}
function getProductID1($ma_loaisp)
{
	$db = connect();
	$sql = "SELECT * FROM ad_product WHERE ma_loaisp = '$ma_loaisp'";
	$stm = $db->prepare($sql);
	$stm->execute();
	$ProductID1 = $stm->fetchAll();
	return $ProductID1;
}
