<?php 
if(isset($_POST['id_kegiatan'])){
    $id_kegiatan = $_POST['id_kegiatan'];
    $id_kategori_kegiatan = $_POST['id_kategori_kegiatan'];
    $kegiatan = $_POST['kegiatan'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = '../img/'.$nama_file;
 
    //get foto 
    $sql_f = "SELECT `foto` FROM `kegiatan` WHERE `id_kegiatan`='$id_kegiatan'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $foto = $data_f[0];
        //echo $foto;
    }
   
     if(empty($id_kategori_kegiatan)){
	    header("Location:edit-kegiatan&data=$id_kegiatan&notif=editkosong
         &jenis=kategorikegiatan");
	}else if(empty($kegiatan)){
	    header("Location:edit-kegiatan&data=$id_kegiatan&notif=editkosong
         &jenis=kegiatan");
	}else if(empty($isi)){
	    header("Location:edit-kegiatan&data=$id_kegiatan&notif=editkosong
         &jenis=isi");
	}else if(empty($tanggal)){
	    header("Location:edit-kegiatan&data=$id_kegiatan&notif=editkosong
         &jenis=tanggal");
	}else{
       $lokasi_file = $_FILES['foto']['tmp_name'];
	   $nama_file = $_FILES['foto']['name'];
	   $direktori = '../img/'.$nama_file;
	   if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($foto)){
                unlink("../img/$foto");
            }
			$sql = "UPDATE `kegiatan` set 
		     `id_kategori_kegiatan`='$id_kategori_kegiatan',`kegiatan`='$kegiatan',
			`isi`='$isi',`tanggal`='$tanggal',`foto`='$nama_file'
			WHERE `id_kegiatan`='$id_kegiatan'";
			mysqli_query($koneksi,$sql);
		}else{
			$sql = "UPDATE `kegiatan` set 
		     `id_kategori_kegiatan`='$id_kategori_kegiatan',`kegiatan`='$kegiatan',
			`isi`='$isi',`tanggal`='$tanggal' WHERE `id_kegiatan`='$id_kegiatan'";
			mysqli_query($koneksi,$sql);
}

header("Location:kegiatan&notif=editberhasil");
}
}
 
?>
