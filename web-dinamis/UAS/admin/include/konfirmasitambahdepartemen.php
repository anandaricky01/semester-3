<?php 
	$departemen = $_POST['departemen'];
	$deskripsi = $_POST['deskripsi'];
	$logo = $_POST['logo'];
	$kepanjangan = $_POST['kepanjangan'];
	if(empty($departemen)){
		header("Location:edit-departemen&notif=tambahkosong");
	}else if(empty($deskripsi)){
		header("Location:edit-departemen&notif=tambahkosong");
	}else{
		$sql = "INSERT INTO `departemen` (`id_departemen`,`departemen`,`deskripsi`,`kepanjangan`,`logo`) 
		values (NULL,'$departemen','$deskripsi','$kepanjangan','$logo')";
		mysqli_query($koneksi,$sql);
	header("Location:departemen&notif=tambahberhasil");	
	}
?>