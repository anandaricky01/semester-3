<?php 
	$kategori_kegiatan = $_POST['kategori_kegiatan'];
	if(empty($kategori_kegiatan)){
		header("Location:tambah-kategori-kegiatan&notif=tambahkosong");
	}else{
		$sql = "INSERT INTO `kategori_kegiatan`(`id_kategori_kegiatan`, `kategori_kegiatan`) VALUES (NULL,'$kategori_kegiatan')";
		mysqli_query($koneksi,$sql);
	header("Location:kategori-kegiatan&notif=tambahberhasil");	
	}
?>
