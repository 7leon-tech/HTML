<?php
session_start();
if(!isset($_SESSION['auth_user'])){
header("location: ../login.php");
}
?><!DOCTYPE html>
<html>
<head>
	<title>Change Book Data</title>
		<style type="text/css">
			<!--header{ padding:65px; font-size:3em;}
			.first{paddding:40px; font-family:freestyle script;font-size:1.5em;}
			.main1{padding:10px;}
			.main2 a:hover{color:black; font-size:2em;}
			nav{ background: linear-gradient(to left, white,#EBC481,white); padding:10px;}
			nav a{float: middle; color:black; text-decoration:none; padding:20px; FONT-SIZE:1.5EM;}
			nav a:hover{font-size:2em;}
			input[type=text],input[type=password] {border: 1px solid #EBC481; border-radius: 8px; padding:9px; width: 225px;}
			input[type=submit] {border-radius: 5px; border: 1px solid #EBC481; margin: 4px 10px; padding: 5px; width: 100px;}
			input[type=text]:focus,input[type=text]:hover{width:250px; padding:13px; border-color:#EBC481; border-radius: 9px; box-shadow: inset 0 1px 1px #EBC481, 0 0 8px #EBC481; outline: 0;}
			input[type=password]:focus,input[type=password]:hover{width:250px; padding:13px; border-color:#EBC481; border-radius: 9px; box-shadow: inset 0 1px 1px #EBC481, 0 0 8px #EBC481; outline: 0;}
			input[type=submit]:focus,input[type=submit]:hover{border-color:#EBC481; border-radius: 9px; box-shadow: inset 0 1px 1px #EBC481, 0 0 8px #EBC481; outline: 0;}-->
		</style>
</head>
<?php
$koneksi = new mysqli("localhost","root","","perpus");
if (isset($_GET['kode_buku'])){
$kode_buku = $_GET['kode_buku'];
$sqlCariBuku = "select * from buku where kode_buku = '".$kode_buku."'";
$hasil = $koneksi->query($sqlCariBuku);
$kolom = $hasil->fetch_assoc();
}
?>
<body>
	<header><center><img src="cats-crop.jpg" width="60%" height="60%"></center></header>
	<div class="first">
	<center><nav><a href="index.php">Home</a> <a href="insertbuku.php">Insert Buku</a><a href="logout.php">Logout</a></nav></center>
<h1>Change Book Data</h1>
<form method="POST" action="">
<input type="text" name="kode_buku" style="font-family:freestyle script;font-size:1em;" placeholder="Insert Book Code.." value="<?php echo $kolom['kode_buku'];?>">
<input type="text" name="nama_buku" style="font-family:freestyle script;font-size:1em;" placeholder="Book Name.." value="<?php echo $kolom['nama_buku'];?>">
<input type="text" name="penulis" style="font-family:freestyle script;font-size:1em;" placeholder="Book Creator.." value="<?php echo $kolom['penulis'];?>">
<input type="text" name="jumlah" style="font-family:freestyle script;font-size:1em;" placeholder="Many of Book Stock.." value="<?php echo $kolom['jumlah'];?>">
<input type="hidden" style="font-family:freestyle script;font-size:1em;" name="kode_buku_lama" value="<?php echo $kolom['kode_buku'];?>">
<input type="submit" name="submit" value="Save Change" style="font-family:freestyle script;font-size:1em;"></td></tr>
</table>
</form>
<br>
<?php
$koneksi = new mysqli("localhost","root","","perpus");
if (isset($_POST['submit'])){
$kode_buku = $_POST['kode_buku']; 
$nama_buku = $_POST['nama_buku'];
$penulis = $_POST['penulis'];
$jumlah = $_POST['jumlah'];
$kode_buku_lama = $_POST['kode_buku_lama'];

$sql = "update buku set kode_buku = '".$kode_buku."',
nama_buku = '".$nama_buku."' ,
penulis = '".$penulis."' ,
jumlah = '".$jumlah."'
where kode_buku='".$kode_buku_lama."'";

if ($koneksi->query($sql) === true){
echo "Book Data has been Succesfully change,
<a href=?kode_buku=".$kode_buku.">refresh</a>";
}else{
echo "There's a mistake, ".$koneksi->error;
}
}
?>
</div>

<br>
		<br>						
		<br>
		<br>
		<br>
	</div>
	<footer style="font-family:freestyle script;font-size:1em;"><center><b>Copyright KasandiCorps@2017</b></center></footer>
</body>
</html>
