<?php 

	session_start();

	if (isset($_POST['username']) && isset($_POST['password'])) {
		
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		$_SESSION['nama'] = $_POST['nama'];
		$_SESSION['email'] = $_POST['email'];

		if ($_SESSION['username'] === 'anandaricky' && $_SESSION['password'] === 'password') {
			
			header("Location:profil.php");

		} else {

			$_SESSION['peringatan'] = 'Maaf Username atau Nama salah!';
			header("Location:form.php");
		}

	} 




 ?>