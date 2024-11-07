<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng kí thành viên</title>

</head>

<body>
<?php
  require_once "Database.php";
	$txt_username=isset($_POST["txt_username"])?$_POST["txt_username"]:"";
	$txt_password=isset($_POST["txt_password"])?$_POST["txt_password"]:"";
  $txt_password_again=isset($_POST["txt_password_again"])?$_POST["txt_password_again"]:"";
  require_once "Login_Function.php";

  if($_SERVER["REQUEST_METHOD"]== "POST"){
      if(isset($_POST["btn_submit"])){
          switch($_POST["btn_submit"]){
              case "Đăng ký thành viên":
                insertLogin($txt_username,$txt_password,$txt_password_again);
                  break;
  }
  }
  }

?>
	<form action="" method="post" enctype="multipart/form-data">
        <table width="400" border="1" class="dangkythanhvien">
          <tr>
            <td colspan="2">ĐĂNG KÍ THÀNH VIÊN</td>
          </tr>
          
          <tr>
            <td>Tên đăng nhập</td>
            <td>
            	<input name="txt_username" type="text" placeholder="Nhập tên đăng nhập" />
            </td>
          </tr>
          <tr>
            <td>Mật khẩu</td>
            <td>
            	<input name="txt_password" type="password"placeholder="Nhập mật khẩu" />
            </td>
          </tr>
          <tr>
            <td>Mật khẩu</td>
            <td>
            	<input name="txt_password_again" type="password"placeholder="Nhập lại mật khẩu" />
            </td>
          </tr>
          <tr>
            <td colspan="2">
                <input name="reset" type="reset" value ="Reset"/>
            	  <input name="btn_submit" type="submit" value ="Đăng ký thành viên"/>
            </td>
          </tr>
    	</table>
    </form>
</body>
</html>
