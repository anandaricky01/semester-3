<?php 
	if(isset($_POST['id_konten'])){
	  $id_konten = $_POST['id_konten'];
	  $isi = $_POST['isi'];
	  $judul = $_POST['judul'];
	 var_dump($_POST);
	   if(empty($judul) && empty($isi)){
	 	    header("Location:edit-konten&data=".$id_konten."&notif=editkosong");
	 	    die;
	  }else{
		$sql = "UPDATE `konten` SET `judul` = '$judul', `isi` = '$isi' WHERE `konten`.`id_konten` = $id_konten";
		mysqli_query($koneksi,$sql);
		header("Location:konten&notif=editberhasil");

	  }
	}
?>