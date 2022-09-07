<?php 
session_start();
if ($_SESSION['status']!="login") {
	header("location:../index.php?pesan=belum_login");

}
include"../koneksi.php";
$datas = mysqli_query($koneksi, "SELECT * FROM admin WHERE 
username='$_SESSION[username]'");
$data= mysqli_fetch_array($datas);
?>

<!DOCTYPE html>
<html>
<head>
	<title>halaman admin</title>
</head>
<body>
<h2>SELAMAT DATANG<?php echo "<br>$data[nama]";?></h2>


<a href="logout.php">LOGOUT</a>

</body>
</html>