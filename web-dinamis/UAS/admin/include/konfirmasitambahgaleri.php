<?php 
   
    
    $id_kategori_kegiatan = $_POST['id_kategori_kegiatan'];
    $lokasi_file = $_FILES['galeri']['tmp_name'];
    $nama_file = $_FILES['galeri']['name'];
    $direktori = '../galeri/'.$nama_file;
   
   if(empty($id_kategori_kegiatan)){
   header("Location:tambah-galerin&notif=tambahkosong&jenis=kategori-kegiatan");
   }else if(!move_uploaded_file($lokasi_file,$direktori)){
      header("Location:tambah-galerin&notif=tambahkosong&jenis=foto");
    }else{   

   $sql = "INSERT INTO `galeri` 
      (`id_galeri`,`id_kategori_kegiatan`,`galeri`)
      VALUES (NULL,'$id_kategori_kegiatan','$nama_file')";
      //echo $sql;
   mysqli_query($koneksi,$sql);
   $id_buku = mysqli_insert_id($koneksi);
 
      header("Location:galeri&notif=tambahberhasil");
    }
?>
