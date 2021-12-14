<?php 
    session_start();
    include("../koneksi/koneksi.php");
    if(isset($_GET["include"])){
      $include = $_GET["include"];
      if($include=="konfirmasi-login"){
        include("include/konfirmasilogin.php");
      }else if($include=="signout"){
        include("include/signout.php");
      } // kategori kategori kegiatan
      else if($include=="konfirmasi-tambah-kategori-kegiatan"){
        include("include/konfirmasitambahkategorikegiatan.php");
      }else if($include=="konfirmasi-edit-kategori-kegiatan"){
        include("include/konfirmasieditkategorikegiatan.php");
        } // departemen
      else if($include=="konfirmasi-tambah-departemen"){
        include("include/konfirmasitambahdepartemen.php");
      }else if($include=="konfirmasi-edit-departemen"){
        include("include/konfirmasieditdepartemen.php");
      } // kategori kegiatan
      else if($include=="konfirmasi-tambah-kegiatan"){
        include("include/konfirmasitambahkegiatan.php");
      }else if($include=="konfirmasi-edit-kegiatan"){
        include("include/konfirmasieditkegiatan.php");
      }
      // kategori galeri
      else if($include=="konfirmasi-tambah-galeri"){
        include("include/konfirmasitambahgaleri.php");
      }else if($include=="konfirmasi-edit-galeri"){
        include("include/konfirmasieditgaleri.php");
      }
      // proker
      else if($include=="konfirmasi-tambah-proker"){
        include("include/konfirmasitambahproker.php");
      }else if($include=="konfirmasi-edit-proker"){
        include("include/konfirmasieditproker.php");
      } 
      // pengaturan user
      else if($include=="konfirmasi-tambah-user"){
        include("include/konfirmasitambahuser.php");
      }
      else if($include=="konfirmasi-edit-user"){
        include("include/konfirmasiedituser.php");
      }
      // edit profil
      else if($include=="konfirmasi-edit-profil"){
        include("include/konfirmasieditprofil.php");
      }
    }
?>



<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head.php") ?>
</head>
<?php
//cek ada get include
if(isset($_GET["include"])){
   $include = $_GET["include"];
   //cek apakah ada session id admin
   if(isset($_SESSION['id_user'])){
    ?>
    <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <?php include("includes/header.php") ?>
        <?php include("includes/sidebar.php") ?>
        <div class="content-wrapper">
          <?php 
            // data master    
                // kategori buku
                if($include=="kategori-kegiatan"){
                    include("include/kategorikegiatan.php");
                }else if($include=="tambah-kategori-kegiatan"){
                    include("include/tambahkategorikegiatan.php");
                }else if($include=="edit-kategori-kegiatan"){
                    include("include/editkategorikegiatan.php");
                }
                // departemen
                else if($include=="departemen"){
                    include("include/departemen.php");
                }else if($include=="tambah-departemen"){
                    include("include/tambahdepartemen.php");
                }else if($include=="edit-departemen"){
                    include("include/editdepartemen.php");
                }else if($include=="detail-departemen"){
                    include("include/detaildepartemen.php");
                }
                // proker
                else if($include=="proker"){
                    include("include/proker.php");
                }else if($include=="tambah-proker"){
                    include("include/tambahproker.php");
                }else if($include=="edit-proker"){
                    include("include/editproker.php");
                }else if($include=="detail-proker"){
                    include("include/detailproker.php");
                }
                // kategori blog
                else if($include=="kegiatan"){
                    include("include/kegiatan.php");
                }else if($include=="tambah-kegiatan"){
                    include("include/tambahkegiatan.php");
                }else if($include=="edit-kegiatan"){
                    include("include/editkegiatan.php");
                }else if($include=="detail-kegiatan"){
                    include("include/detailkegiatan.php");
                }
                // galeri
                else if($include=="galeri"){
                    include("include/galeri.php");
                }else if($include=="tambah-galeri"){
                    include("include/tambahgaleri.php");
                }else if($include=="edit-galeri"){
                    include("include/editgaleri.php");
                }else if($include=="detail-galeri"){
                    include("include/detailgaleri.php");
                }
            // akhir data master

            // konten 
                else if($include=="konten"){
                    include("include/konten.php");
                }
                else if($include=="edit-konten"){
                    include("include/editkonten.php");
                }
                else if($include=="detail-konten"){
                    include("include/detailkonten.php");
                }
            // akhir konten

            // buku
                else if($include=="buku"){
                    include("include/buku.php");
                }
                else if($include=="detail-buku-admin"){
                    include("include/detailbukuadmin.php");
                }
                else if($include=="edit-buku"){
                    include("include/editbuku.php");
                }
                else if($include=="tambah-buku"){
                    include("include/tambahbuku.php");
                }
            // akhir buku

            // pengaturan user
                else if($include=="user"){
                    include("include/user.php");
                }
                else if($include=="detail-user"){
                    include("include/detailuser.php");
                }
                else if($include=="tambah-user"){
                    include("include/tambahuser.php");
                }
                else if($include=="edit-user"){
                    include("include/edituser.php");
                }
            // akhir pengaturan user

            // ubah password
                else if($include=="ubah-password"){
                    include("include/ubahpassword.php");
                }
            // akhir ubah password
            
            // default (profil)
                else if($include=="edit-profil"){
                    include("include/editprofil.php");
                }
                else{
                    echo $_SESSION['level'];
                    include("include/profil.php");
                }  
            ?>

        </div>
        <!-- /.content-wrapper -->
        <?php include("includes/footer.php") ?>
      </div>
      <!-- ./wrapper -->
      <?php include("includes/script.php") ?>
    </body>
    <?php
    }else{
    //pemanggilan halaman form login
      include("include/login.php");
    }  
}else{
  if(isset($_SESSION['id_user'])){
  //pemanggilan ke halaman-halaman profil jika ada session
  ?>
  <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <?php include("includes/header.php") ?>
        <?php include("includes/sidebar.php") ?>
        <div class="content-wrapper">
        <?php
          //pemanggilan profil
          include("include/profil.php");
        ?>
        </div>
        <!-- /.content-wrapper -->
        <?php include("includes/footer.php") ?>
      </div>
      <!-- ./wrapper -->
      <?php include("includes/script.php") ?>
    </body>
    <?php
  }else{
  //pemanggilan halaman form login
    include("include/login.php");
  } 
}
?>


</html>
