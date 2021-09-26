<?php  

	session_start();

	if (isset($_SESSION['login'])) {
		if($_SESSION['login'] == true){
			header('Location:profil.php');
			exit;
		} 
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>

	<?php if(isset($_GET['pesan'])) 
	{
		if ($_GET['pesan'] == "username") {
			echo "<p style='color: red;'>" . "Maaf Username harus diisi!" . "</p>";
		} else if ($_GET['pesan'] == "password") {
			echo "<p style='color: red;'>" . "Maaf Password harus diisi!" . "</p>";
		} else {
			echo "<p style='color: red;'>" . "Maaf Username atau Password anda salah!" . "</p>";
		}
	}
	?>
	

	<form action="cekLogin.php" method="post">
		<table border="1">
			<tr>
				<th colspan="3">
					LOGIN
				</th>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="3"><button type="submit" name="login">Login</button></td>
			</tr>

		</table>
	</form>
</body>
</html>