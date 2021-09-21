<?php 

	session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
</head>
<body>

	<h1>Selamat Datang</h1>
	<h4>Anda Berhasil Login</h4>
	Nama Anda : <?php if(isset($_SESSION['nama'])){ echo $_SESSION['nama']; } ?><br>
	Email Anda : <?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; } ?>

</body>
</html>