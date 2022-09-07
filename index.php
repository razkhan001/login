<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="card col-6 mx-auto mt-5">
  <div class="card-header bg-primary text-white">
   <b>form login</b>
  </div>
  <div class="card-body">
  	<?php 
 if(isset($_GET['pesan'])){
 if($_GET['pesan'] == "gagal"){
 echo "Login gagal! username dan password salah!";
 }
 else if($_GET['pesan'] == "logout"){
 echo "Anda telah berhasil logout";
 }
 else if($_GET['pesan'] == "belum_login"){
 echo "Anda harus login untuk mengakses halaman 
admin";
 }
 }
 ?>
  	<form method="POST" action="login.php">
  		 <div class="form-group">
    <label for="username">username</label>
    <input type="text" class="form-control" name="username">
  </div>
  	 <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
   <button type="submit" class="btn btn-primary">login</button>
</form>
  </div>
</div>





</body>
</html>