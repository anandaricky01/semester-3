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
	<title>Berhasil Edit</title>
</head>
<body>
	<?php if (isset($_GET['pesan'])) { 

		if ($_GET['pesan'] == 'berhasil') {
			echo "<p>Data profil berhasil diedit! <a href='profil.php'>Klik di sini</a> untuk kembali!</p>";
		}
		else {
			echo "<p>Data profil gagal diedit! <a href='profil.php'>Klik di sini</a> untuk kembali!</p>";
		}

	}?>

	
</body>
</html>