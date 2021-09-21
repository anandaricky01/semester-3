<?php 

	session_start();

	if (isset($_POST['username']) && isset($_POST['password'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username === 'anandaricky' && $password === 'password') {
			
			$_SESSION['nama'] = $_POST['nama'];
			$_SESSION['email'] = $_POST['email'];
			header("Location:profil.php");

		} else {

			header("Location:form.php?pesan=salah");

		}

	} 




 ?>