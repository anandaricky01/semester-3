<?php 
	if(isset($_SESSION['id_departemen'])){
	  $id_departemen = $_SESSION['id_departemen'];
	  $departemen = $_POST['departemen'];
	  $deskripsi = $_POST['deskripsi'];
	  $kepanjangan = $_POST['kepanjangan'];
	  $logo = $_POST['logo'];
	 
	   if(empty($departemen)){
	 	    header("Location:edit-departemen&data=".$id_departemen."&notif=editkosong");
	  }else if(empty($deskripsi)){
	 	    header("Location:edit-departemen&data=".$id_departemen."&notif=editkosong");
	  }else{
		$sql = "UPDATE `departemen` set `departemen`='$departemen', `deskripsi`='$deskripsi', `logo`='$logo', `kepanjangan`='$kepanjangan' 
		where `id_departemen`='$id_departemen'";
		mysqli_query($koneksi,$sql);
		unset($_SESSION['id_departemen']);
		header("Location:departemen&notif=editberhasil");
	  }
	}
?>
