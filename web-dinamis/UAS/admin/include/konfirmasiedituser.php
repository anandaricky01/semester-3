   <?php 
   if(isset($_POST['id_user'])){

    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = 'foto/'.$nama_file;

    //get foto 
    $sql_f = "SELECT `foto` FROM `user` WHERE `id_user`='$id_user'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $foto = $data_f[0];
        //echo $foto;
    }

    if(empty($nama)){
       header("Location:edit-user&data=$id_user&notif=editkosong&jenis=nama");
   }else if(empty($email)){
       header("Location:edit-user&data=$id_user&notif=editkosong&jenis=email");
   }else if(empty($username)){
       header("Location:edit-user&data=$id_user&notif=editkosong&jenis=username");
   }else if(empty($level)){
       header("Location:edit-user&data=$id_user&notif=editkoson&jenis=level");
   }else{   
      $lokasi_file = $_FILES['foto']['tmp_name'];
      $nama_file = $_FILES['foto']['name'];
      $direktori = 'foto/'.$nama_file;
      $move_uploaded_file = move_uploaded_file($lokasi_file,$direktori);
      if($move_uploaded_file){
         if(!empty($foto)){
             unlink("admin/foto/$foto");
         }

         // apakah password diganti
         if (!empty($password)) {
            $sql = "UPDATE `user` set 
            `nama`='$nama',`email`='$email',
            `username`='$username', `password`='$password' ,`id_role`='$level', `foto`='$nama_file' WHERE `id_user`='$id_user'";
            mysqli_query($koneksi,$sql);
            } else {
            $sql = "UPDATE `user` set 
            `nama`='$nama',`email`='$email',
            `username`='$username', `id_role`='$level', `foto`='$nama_file' WHERE `id_user`='$id_user'";
            mysqli_query($koneksi,$sql);
            }
         
         }else{

            if (!empty($password)) {
            $sql = "UPDATE `user` set 
            `nama`='$nama',`email`='$email',
            `username`='$username', `password`='$password' ,`id_role`='$level' WHERE `id_user`='$id_user'";
            mysqli_query($koneksi,$sql);
            } else {
            $sql = "UPDATE `user` set 
            `nama`='$nama',`email`='$email',
            `username`='$username', `id_role`='$level' WHERE `id_user`='$id_user'";
            mysqli_query($koneksi,$sql);
            }
         }
         $_SESSION['level']=$level;
         header("Location:user&notif=editberhasil");
         exit;
   }
}
   ?>
