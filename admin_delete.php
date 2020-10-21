<?php
session_start();
if(!isset($_SESSION['auth_user'])){
header("location: ../login.php");
}
?><!DOCTYPE html>
<html>
<head>
	<title>Welcome to E-library</title>
		<style type="text/css">
			<!--header{ padding:65px; font-size:3em;}
			.first{paddding:40px; font-family:freestyle script;font-size:1.5em;}
			.main1{padding:10px;}
			.main2 a:hover{color:black; font-size:2em;}
			nav{ background: linear-gradient(to left, white,#EBC481,white); padding:10px;}
			nav a{float: middle; color:black; text-decoration:none; padding:20px; FONT-SIZE:1.5EM;}
			nav a:hover{font-size:2em;}
			input[type=email],input[type=password] {border: 1px solid #EBC481; border-radius: 8px; padding:9px; width: 225px;}
			input[type=submit] {border-radius: 5px; border: 1px solid #EBC481; margin: 4px 10px; padding: 5px; width: 100px;}
			input[type=email]:focus,input[type=email]:hover{width:250px; padding:13px; border-color:#EBC481; border-radius: 9px; box-shadow: inset 0 1px 1px #EBC481, 0 0 8px #EBC481; outline: 0;}
			input[type=password]:focus,input[type=password]:hover{width:250px; padding:13px; border-color:#EBC481; border-radius: 9px; box-shadow: inset 0 1px 1px #EBC481, 0 0 8px #EBC481; outline: 0;}
			input[type=submit]:focus,input[type=submit]:hover{border-color:#EBC481; border-radius: 9px; box-shadow: inset 0 1px 1px #EBC481, 0 0 8px #EBC481; outline: 0;}-->
		</style>
</head>
<?php
session_start();
if(!isset($_SESSION['auth_user'])){
header("location: ../index.php");
}
?>
	<header><center><img src="cats-crop.jpg" width="60%" height="60%"></center></header>
	<div class="first">
	<center><nav><a href="index.php">Home</a> <a href="insertbuku.php">Insert Buku</a><a href="logout.php">Logout</a></nav></center>
<h1>Daftar buku </h1>
<table border="10" style="border-color:#EBC481;"><tr border="7" style="border-color:#EBC481;"><th border="7" style="border-color:#EBC481;">Kode Buku </th>
<th border="7" style="border-color:#EBC481;">Nama Buku </th>
<th border="7" style="border-color:#EBC481;">Penulis </th>
<th border="7" style="border-color:#EBC481;">Jumlah </th>
<th border="7" style="border-color:#EBC481;">Keterangan </th></tr>
<div class="a" border="7" style="border-color:#EBC481;">
<?php
$koneksi = new mysqli("localhost","root","","perpus");
$sql = "select * from buku";
$hasil = $koneksi->query($sql);
while($kolom = $hasil->fetch_assoc()) {
echo "<tr><td>".$kolom["kode_buku"]."</td>
<td>".$kolom["nama_buku"]."</td>
<td>".$kolom["penulis"]."</td>
<td>".$kolom["jumlah"]."</td>
<td><a href='updatebuku.php?kode_buku=".$kolom["kode_buku"]."'>update</a>|<a href='listbuku.php?kode_buku=".$kolom["kode_buku"]."'>delete</a> </td></tr>";}
?>
<div style="color:black; text-decoration:none;">
</table>
<?php
$koneksi = new mysqli("localhost","root","","perpus");
if (isset($_GET['kode_buku'])){
$kode_buku = $_GET['kode_buku'];
$sql = "delete from buku where kode_buku = '".$kode_buku."' ";
if ($koneksi->query($sql) === true){
echo "Data buku berhasil dihapus ";
echo "<a href = 'listbuku.php'>Refresh</a>";
}else{
echo "Kesalahan ".$koneksi->error;
}
}
?>
<br>
		<br>						
		<br>
		<br>
		<br>
	</div>
	<footer style="font-family:freestyle script;font-size:1em;"><center><b>Copyright KasandiCorps@2017</b></center></footer>
</body>
</html>
