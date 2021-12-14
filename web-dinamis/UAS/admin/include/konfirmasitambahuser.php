<?php 
   
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = 'foto/'.$nama_file;
 
    if(empty($nama)){
   header("Location:tambah-user&notif=tambahkosong&jenis=nama");
   }else if(empty($email)){      
      header("Location:tambah-user&notif=tambahkosong&jenis=email");
   }else if(empty($username)){
   header("Location:tambah-user&notif=tambahkosong&jenis=username");
   }else if(empty($password)){
   header("Location:tambah-user&notif=tambahkosong&jenis=password");
   }else if(empty($level)){
   header("Location:tambah-user&notif=tambahkosong&jenis=level");
   }else if(!move_uploaded_file($lokasi_file,$direktori)){
      header("Location:tambah-user&notif=tambahkosong&jenis=foto");
    }else{   

   $sql = "INSERT INTO `user` 
      (`id_user`,`nama`,`email`,`username`,
   `password`,`id_role`,`foto`)
      VALUES (NULL,'$nama','$email','$username',
   '$password','$level','$nama_file')";
      //echo $sql;
   mysqli_query($koneksi,$sql);
   $id_buku = mysqli_insert_id($koneksi);
 
      header("Location:user&notif=tambahberhasil");
    }
?>
