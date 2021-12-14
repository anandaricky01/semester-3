<?php 
	if(isset($_SESSION['id_kategori_kegiatan'])){
	  $id_kategori_kegiatan = $_SESSION['id_kategori_kegiatan'];
	  $kategori_kegiatan = $_POST['kategori_kegiatan'];
	 
	   if(empty($kategori_kegiatan)){
	 	    header("Location:edit-kategori-kegiatan&data=".$id_kategori_kegiatan."&notif=editkosong");
	  }else{
		$sql = "update `kategori_kegiatan` set `kategori_kegiatan`='$kategori_kegiatan' 
		where `id_kategori_kegiatan`='$id_kategori_kegiatan'";
		mysqli_query($koneksi,$sql);
		unset($_SESSION['id_kategori_kegiatan']);
		header("Location:kategori-kegiatan&notif=editberhasil");
	  }
	}
?>
