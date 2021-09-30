<?php 

	session_start();

	// connect ke database
	$conn = mysqli_connect("localhost","root","","web_dinamis_5b");

	// apakah koneksi berhasil?
	if (!$conn) {
		die("Koneksi Error : " . mysqli_connect_errno());
	}

	// cek nama dan password apakah sudah terisi atau belum
	if (strlen($_POST['username']) > 0) {
		if (strlen($_POST['password']) > 0){
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
		}
		else {
			header('Location:form.php?pesan=password');
			exit;
		}
	} else {
		header('Location:form.php?pesan=username');
		exit;
	}

	// cek apakah user sudah login sebelumnya atau belum
	if (isset($_SESSION['login'])) {
		if($_SESSION['login'] == true){
			header('Location:profil.php');
			exit;
		} else {
			header('Location:form.php');
		}
	}

	// proses data
	$query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE username = '$username'");
	$data = mysqli_fetch_assoc($query);
	
	$result = mysqli_num_rows($query);

	// periksa apakah tombol login pada form sudah ditekan
	if (isset($_POST['login'])) {
		if ($result === 1) {
			if ($password === $data['password']) {
				$_SESSION['login'] = true;

				$_SESSION['nama'] = $data['nama'];
				$_SESSION['email'] = $data['email'];
				$_SESSION['id'] = $data['id'];

				header('Location:profil.php');
				exit;
			}
		}

		header('Location:form.php?pesan=salah');
		exit;
	}
	

	

?>