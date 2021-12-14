<?php 
	$departemen = $_POST['departemen'];
	$deskripsi = $_POST['deskripsi'];
	if(empty($departemen)){
		header("Location:edit-departemen&notif=tambahkosong");
	}else if(empty($deskripsi)){
		header("Location:edit-departemen&notif=tambahkosong");
	}else{
		$sql = "insert into `departemen` (`departemen`,`deskripsi`) 
		values ('$departemen','$deskripsi')";
		mysqli_query($koneksi,$sql);
	header("Location:departemen&notif=tambahberhasil");	
	}
?>