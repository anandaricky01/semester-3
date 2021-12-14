<?php 
	$penerbit = $_POST['penerbit'];
	$alamat = $_POST['alamat'];
	if(empty($penerbit)){
		header("Location:tambah-penerbit&notif=tambahkosong");
	}else{
		$sql = "insert into `penerbit` (`penerbit`,`alamat`) 
		values ('$penerbit','$alamat')";
		mysqli_query($koneksi,$sql);
	header("Location:penerbit&notif=tambahberhasil");	
	}
?>
