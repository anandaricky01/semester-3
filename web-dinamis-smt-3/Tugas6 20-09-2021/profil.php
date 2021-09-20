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
	Nama Anda : <?php echo $_SESSION['nama']; ?><br>
	Email Anda : <?php echo $_SESSION['email']; ?>

</body>
</html>