<?php 
	if(isset($_SESSION['id_proker'])){
		$id_proker = $_SESSION['id_proker'];
	  $id_departemen = $_POST['id_departemen'];
	  $id_kategori_kegiatan = $_POST['id_kategori_kegiatan'];
	  $proker = $_POST['proker'];
	  $deskripsi = $_POST['deskripsi'];
	 
	   if(empty($proker)){
	 	    header("Location:edit-proker&data=".$id_proker."&notif=editkosong");
	  }else if(empty($id_proker)){
	 	    header("Location:edit-proker&data=".$id_proker."&notif=editkosong");
	  }else if(empty($deskripsi)){
	 	    header("Location:edit-proker&data=".$id_proker."&notif=editkosong");
	  }else{
		$sql = "UPDATE `proker` SET `proker`='$proker', `deskripsi`='$deskripsi', `id_departemen`='$id_departemen', `id_kategori_kegiatan`='$id_kategori_kegiatan' WHERE `id_proker`='$id_proker'";
		mysqli_query($koneksi,$sql);
		unset($_SESSION['id_proker']);
		header("Location:proker&notif=editberhasil");
	  }
	}
?>