<?php 
	$id_departemen = $_POST['departemen'];
	$proker = $_POST['proker'];
	$deskripsi = $_POST['deskripsi'];
	$id_kategori_kegiatan = $_POST['id_kategori_kegiatan'];

	if(empty($proker)){
		header("Location:tambah-proker&notif=tambahkosong");
	}else if(empty($deskripsi)){
		header("Location:tambah-proker&notif=tambahkosong");
	}else if(empty($id_departemen)){
		header("Location:tambah-proker&notif=tambahkosong");
	}else{
		$sql = "INSERT INTO `proker` (`id_departemen`,`proker`,`deskripsi`, `id_kategori_kegiatan`) 
		VALUES ('$id_departemen','$proker','$deskripsi', '$id_kategori_kegiatan')";
		mysqli_query($koneksi,$sql);
	header("Location:proker&notif=tambahberhasil");	
	}
?>
