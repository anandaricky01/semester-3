<?php 

	session_start();
	
	if (isset($_SESSION['login'])) {
		if($_SESSION['login'] == false){
			header('Location:form.php');
			exit;
		}
	} else {
		header('Location:form.php');
		exit;
	}
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>

	<style>
		nav {
			margin:auto;
			text-align: center;
			width: 100%;
			font-family: arial;
		} 
		
		nav ul {
			padding: 0 20px;
			list-style: none;
			position: relative;
			display: inline-table;
			width: 100%;
		}

		nav ul li{
			float:left;
		}
	</style>
</head>
<body>

	<h1>Selamat Datang</h1>

	<nav>
		<ul>
			<li><a href="profil.php">Profil | </a></li>
			<li><a href="">Data mahasiswa | </a></li>
			<li><a href="">Data jurusan | </a></li>
			<li><a href="">Data hobi | </a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>

	<table border="1">
		<tr>
			<th colspan="3" style="width: 70%;">Profil</th>
		</tr>
		<tr>
			<td>Nama</td>
			<td> : </td>
			<td><?php if(isset($_SESSION['nama'])){ echo $_SESSION['nama']; } else { echo "Nama masih kosong";}?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td> : </td>
			<td><?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; } else { echo "Email masih kosong";} ?></td>
		</tr>
		<tr>
			<td colspan="3"><a href="edit.php">Ubah</a></td>
		</tr>
	</table>
	<br>
	

</body>
</html>