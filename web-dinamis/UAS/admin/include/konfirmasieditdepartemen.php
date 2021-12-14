<?php 
	if(isset($_SESSION['id_departemen'])){
	  $id_departemen = $_SESSION['id_departemen'];
	  $departemen = $_POST['departemen'];
	  $deskripsi = $_POST['deskripsi'];
	 
	   if(empty($departemen)){
	 	    header("Location:edit-departemen&data=".$id_departemen."&notif=editkosong");
	  }else if(empty($deskripsi)){
	 	    header("Location:edit-departemen&data=".$id_departemen."&notif=editkosong");
	  }else{
		$sql = "update `departemen` set `departemen`='$departemen', `deskripsi`='$deskripsi' 
		where `id_departemen`='$id_departemen'";
		mysqli_query($koneksi,$sql);
		unset($_SESSION['id_departemen']);
		header("Location:departemen&notif=editberhasil");
	  }
	}
?>
