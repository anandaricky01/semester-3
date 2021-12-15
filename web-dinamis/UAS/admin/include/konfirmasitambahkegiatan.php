<?php 
   
    $kegiatan = $_POST['kegiatan'];
    $isi = $_POST['isi'];
    $id_kategori_kegiatan = $_POST['id_kategori_kegiatan'];
    $tanggal = $_POST['tanggal'];
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = '../img/'.$nama_file;
   
    if(empty($kegiatan)){
   header("Location:tambah-kegiatan&notif=tambahkosong&jenis=kegiatan");
   }else if(empty($isi)){      
      header("Location:tambah-kegiatan&notif=tambahkosong&jenis=isi");
   }else if(empty($id_kategori_kegiatan)){
   header("Location:tambah-kegiatan&notif=tambahkosong&jenis=kategori-kegiatan");
   }else if(!move_uploaded_file($lokasi_file,$direktori)){
      header("Location:tambah-kegiatan&notif=tambahkosong&jenis=foto");
    }else{   

   $sql = "INSERT INTO `kegiatan` 
      (`id_kegiatan`,`id_kategori_kegiatan`,`kegiatan`,`foto`,`isi`,
   `tanggal`)
      VALUES (NULL,'$id_kategori_kegiatan','$kegiatan','$nama_file','$isi',
   '$tanggal')";
      //echo $sql;
   mysqli_query($koneksi,$sql);
   $id_buku = mysqli_insert_id($koneksi);
 
      header("Location:kegiatan&notif=tambahberhasil");
    }
?>
