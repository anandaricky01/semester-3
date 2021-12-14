<?php 
	$kategori_blog = $_POST['kategori_blog'];
	if(empty($kategori_blog)){
		header("Location:tambah-kategori-blog&notif=tambahkosong");
	}else{
		$sql = "insert into `kategori_blog` (`kategori_blog`) 
		values ('$kategori_blog')";
		mysqli_query($koneksi,$sql);
	header("Location:kategori-blog&notif=tambahberhasil");	
	}
?>
