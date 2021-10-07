<?php 
	session_start();
	include('koneksi/koneksi.php');
	if(isset($_SESSION['id_konten'])){
	  $id_konten = $_SESSION['id_konten'];
	  $isi = $_POST['isi'];
	  $judul = $_POST['judul'];
	 
	   if(empty($judul) && empty($isi)){
	 	    header("Location:editkonten.php?data=".$id_konten."¬if=editkosong");
	  }else{
		$sql = "UPDATE `konten` SET `judul` = '$judul', `isi` = '$isi' WHERE `konten`.`id_konten` = $id_konten";
		mysqli_query($koneksi,$sql);
		unset($_SESSION['id_konten']);
		header("Location:konten.php?notif=editberhasil");
	  }
	}
?>