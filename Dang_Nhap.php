<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng Nhập</title>
</head>

<body>
<?php
    require_once "Database.php";
    require_once "Login_Function.php";
	$txt_taikhoan=isset($_POST["txt_taikhoan"])?$_POST["txt_taikhoan"]:"";
	$txt_matkhau=isset($_POST["txt_matkhau"])?$_POST["txt_matkhau"]:"";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST["btnlogin"])){
		if((getUres($txt_taikhoan, $txt_matkhau))){
			echo"Đăng nhập thành công";
            header("location:index.php");
		}
		else echo "Sai tài khoản hoặc mật khẩu. Vui lòng nhập lại!";
	}
    }
?>
	<form action="" method="post">
        <table width="400" border="1">
          <tr>
            <td colspan ="2">Đăng Nhập</td>
          </tr>
          <tr>       
            <td>Tài khoản</td>
            <td>
            	<input name="txt_taikhoan" type="text" placeholder = "Nhập tài khoản người dùng"/> 
           
            </td>
          </tr>
          <tr>
            <td>Mật khẩu</td>
            <td>
            	<input name="txt_matkhau" type="Password" placeholder = "password"/>
               
            </td>
          </tr>
          <tr>
          <td colspan="2">
          <input name="btnlogin" type="submit" value="Đăng nhập"/>
          <a href="Dang_Ki.php" > Đăng ký </a>
          </td>
          </tr>
        </table>
</form>

</body>
</html>
