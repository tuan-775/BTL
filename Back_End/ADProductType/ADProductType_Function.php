<?php
	function insertAdProductType($ma_loaisp,$ten_loaisp,$mota_loaisp){
		$db=connect();
		$sql="INSERT INTO adproducttype(ma_loaisp,ten_loaisp,mota_loaisp)";
		$sql.="VALUE ('$ma_loaisp','$ten_loaisp','$mota_loaisp')";
		try{
			$db->exec($sql);	
			echo"bạn lưu thành công";
		}
	catch(PDOException $e){
		echo"bạn lưu sản phẩm thành công".$e->getMessage();
	}
	}
	//Lấy toàn bộ dữ liệu từ bảng adproductType
	function getProductType(){
		$db=connect();
		$sql="SELECT * FROM adproducttype ";
		$stm=$db->prepare($sql);
		$stm->execute();
		$productType=$stm->fetchAll();
		return $productType;
	}
	//xoá dữ liệu
	function deleteProductType($ma_loaisp){
		$db=connect();
		$sql="DELETE FROM adproducttype WHERE ma_loaisp='$ma_loaisp'";
		$db->exec($sql);
	}
	//Update dữ liệu
	function UpdateadProductType($ma_loaisp,$ten_loaisp,$mota_loaisp){
		$db=connect();
		$sql="UPDATE adproducttype SET ten_loaisp='$ten_loaisp',";
		$sql.="mota_loaisp='$mota_loaisp'WHERE ma_loaisp='$ma_loaisp'";
		$db->exec($sql);
	}
    //lấy dữ liệu theo mã loại sản phẩm
	function getProductTypeID($ma_loaisp){
		$db=connect();
		$sql="SELECT * FROM adproducttype WHERE ma_loaisp='$ma_loaisp'";
		$stm=$db->prepare($sql);
		$stm->execute();
		$productTypeID=$stm->fetch();
		return $productTypeID;
	}
	?>