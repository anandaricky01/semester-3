<?php 

	session_start();
	if (isset($_POST['login'])) {
		if (isset($_POST['email'])) {
			if (isset($_POST['password'])) {
				$email = $_POST['email'];
				$password = $_POST['password'];
				if ($email == "cikociko@gmail.com" && $password == "cokicoki123") {
					$_SESSION['login'] = true; 
					header('Location:index.php');
					die;
				}
				else{
					header('Location:login.php');
					die;
				}
			}
			else{
				header('Location:login.php');
				die;
			}
		}
		else{
			header('Location:login.php');
			die;
		}
	}


 ?>