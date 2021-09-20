<?php 

	session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>

	<?php if(isset($_SESSION['peringatan'])) 
	{
		echo "<p style='color: red;'>" . $_SESSION['peringatan'] . "</p>";
	}
	?>
	

	<form action="cekLogin.php" method="post">
		Nama : <input type="text" name="nama"><br>
		Email : <input type="Email" name="email"><br>
		Username : <input type="text" name="username"><br>
		Password : <input type="Password" name="password"><br>
		<button type="submit">Login</button>
	</form>
</body>
</html>