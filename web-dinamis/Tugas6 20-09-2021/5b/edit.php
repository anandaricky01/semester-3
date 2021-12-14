<?php 

	session_start();
	
	// cek apakah user sudah login
	if (isset($_SESSION['login'])) {
		if($_SESSION['login'] == false){
			header('Location:form.php');
			exit;
		}
	} else {
		header('Location:form.php');
		exit;
	}

	// cek apakah tombol ubah sudah ditekan
	if (isset($_POST['ubah'])) {

		// masukan nilai ke dalam variabel
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$id = $_POST['id'];
		
		// connect ke database
		$conn = mysqli_connect("localhost","root","","web_dinamis_5b");

		// apakah koneksi berhasil?
		if (!$conn) {
			die("Koneksi Error : " . mysqli_connect_errno());
		}

		$query = mysqli_query($conn, "UPDATE mahasiswa SET nama = '$nama', email = '$email' WHERE id = $id");

		if (mysqli_affected_rows($conn) > 0) {
			
			$_SESSION['nama'] = $nama;
			$_SESSION['email'] = $email;
			$_SESSION['id'] = $id;

			header('Location:berhasilEdit.php?pesan=berhasil');
		} else {
			header('Location:berhasilEdit.php?pesan=tidak');
		}

	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profil</title>
</head>
<body>

	<h1>Silahkan ubah data pada kolom yang diinginkan!</h1>

	<form action="" method="post">

		<input type="hidden" name="id" value="<?php echo $_SESSION['id']?>">
		<table border="1" >
	    	<tr style="width: 200%">
	    		<th colspan="3">Ubah data mahasiswa</th>
	    	</tr>
	    	<tr>
	    		<td>Nama</td>
	    		<td> : </td>
	    		<td>
	    			<input type="text" name="nama" value="<?php echo $_SESSION['nama']?>">
	    		</td>
	    	</tr>
	    	<tr>
	    		<td>Email</td>
	    		<td> : </td>
	    		<td>
	    			<input type="text" name="email" value="<?php echo $_SESSION['email']?>">
	    		</td>
	    	</tr>
	    	<tr>
	    		<td colspan="3">
		    		<button type="submit" name="ubah">
		    			Ubah!
		    		</button>	
	    		</td>
	    	</tr>
	    </table>
	</form>
    

</body>
</html>