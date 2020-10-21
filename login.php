<!DOCTYPE html>
<html>
<head>
	<title>Welcome to E-library</title>
		<style type="text/css">
			<!--header{ padding:65px; font-size:3em;}
			.first{paddding:40px;}
			.main1{padding:10px;}
			.main2 a:hover{color:black; font-size:2em;}
			input[type=text],input[type=password] {border: 1px solid #EBC481; border-radius: 8px; padding:9px; width: 225px;}
			input[type=submit] {border-radius: 5px; border: 1px solid #EBC481; margin: 4px 10px; padding: 5px; width: 100px;}
			input[type=text]:focus,input[type=text]:hover{width:250px; padding:13px; border-color:#EBC481; border-radius: 9px; box-shadow: inset 0 1px 1px #EBC481, 0 0 8px #EBC481; outline: 0;}
			input[type=password]:focus,input[type=password]:hover{width:250px; padding:13px; border-color:#EBC481; border-radius: 9px; box-shadow: inset 0 1px 1px #EBC481, 0 0 8px #EBC481; outline: 0;}
			input[type=submit]:focus,input[type=submit]:hover{width:110px; border-color:#EBC481; border-radius: 9px; box-shadow: inset 0 1px 1px #EBC481, 0 0 8px #EBC481; outline: 0;}-->
		</style>
</head>
<body>
	<header><center><img src="cats-crop.jpg" width="60%" height="60%"></center></header>
	<div class="first">
	<table width="120%">
	<td width="30%"></td>
	<td width="60%">
	<a style="font-family:freestyle script;font-size:2em;">Please Login to your EL account</a>
	<form action="" method="post">
	<div class="main1" style="font-family:freestyle script;font-size:1.6em; color:red;">
	<?php
	session_start();
	$koneksi = new mysqli("localhost","root","","perpus");
	if(isset($_POST["submit"])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$sql = "SELECT username FROM user WHERE username = '$username' and password = '$password'";
	$hasil = mysqli_query($koneksi,$sql);
	$row = mysqli_fetch_array($hasil,MYSQLI_ASSOC);
	$count = mysqli_num_rows($hasil);
	if($count == 1) {
	$_SESSION['username'] = $username;
	$_SESSION['auth_user'] = true;
	header("location: admin/index.php");
	}else {
	$error = "Your Username or Password is invalid";
	echo $error;
	}
	}
	?>
	</div>
	<div class="main1">
	<input type="text" name="username" style="align:left; font-family:freestyle script;font-size:1.5em;" placeholder="Username...">
	</div>
	<div class="main1">
	<input type="password" name="password" style="align:left;font-family:freestyle script;font-size:1.5em;" placeholder="Password...">
	</div>
	<div class="main1">
	<input type="submit" name="submit" value="LOGIN" style="align:left;font-family:freestyle script;font-size:1em;">
	</div>
	<td width="30%"></td>
	</table>
	<br>
		<br>						
		<br>
		<br>
		<br>
	</div>
	<footer style="font-family:freestyle script;font-size:1em;"><center><b>Copyright KasandiCorps@2017</b></center></footer>
</body>
</html>
