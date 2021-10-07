<?php 
session_start();
include('koneksi/koneksi.php');
if(isset($_GET['data'])){
  $id_buku = $_GET['data'];
  //gat data buku
  $sql = "SELECT `b`.`cover`,`k`.`kategori_buku`,`b`.`judul`,
        `b`.`pengarang`,`b`.`tahun_terbit`,
        `p`.`penerbit`, `b`.`sinopsis` FROM `buku` `b`
        INNER JOIN `kategori_buku` `k` ON 
        `b`.`id_kategori_buku`=`k`.`id_kategori_buku`
        INNER JOIN `penerbit` `p` ON `b`.`id_penerbit`= `p`.`id_penerbit`
        WHERE `b`.`id_buku`='$id_buku'";
  $query = mysqli_query($koneksi,$sql);
  while($data = mysqli_fetch_row($query)){
    $cover = $data[0];
    $kategori_buku = $data[1];
    $judul = $data[2];
    $pengarang = $data[3];
    $tahun_terbit = $data[4];
    $penerbit = $data[5];
    $sinopsis = $data[6];
  }
 
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">

    <!-- Global CSS-->
    <link rel="stylesheet" href="dist/css/style.css">

    <title>Katalog Buku</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class="navbar-brand" href="#">Katalog Buku</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown07">
                    <a class="dropdown-item" href="daftarbuku.php">Java</a>
                    <a class="dropdown-item" href="daftarbuku.php">PHP</a>
                    <a class="dropdown-item" href="daftarbuku.php">HTML</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Contact Us</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>
    <section id="blog-header">
      <div class="container">
        <h1 class="text-white">DETAIL KATALOG</h1>
      </div>
    </section><br><br>
    <section id="katalog-wrapper">
      <main role="main" class="container">
        <div class="row">
          <div class="col-md-9 katalog-detail">
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>                      
                    <tr>
                       <td><strong>Cover Buku<strong></td>
                       <td><img src="admin/cover/<?php echo $cover;?>" 
                       class="img-fluid" width="200px;"></td>
                    </tr>               
                    <tr>
                        <td width="20%"><strong>Kategori Buku<strong></td>
                        <td width="80%"><?php echo $kategori_buku;?></td>
                    </tr>                 
                    <tr>
                        <td width="20%"><strong>Judul<strong></td>
                        <td width="80%"><?php echo $judul;?></td>
                    </tr>                 
                    <tr>
                        <td width="20%"><strong>Pengarang<strong></td>
                        <td width="80%"><?php echo $pengarang;?></td>
                    </tr>
                    <tr>
                         <td width="20%"><strong>Pengarang<strong></td>
                         <td width="80%"><?php echo $penerbit;?></td>
                    </tr>
                    <tr>
                         <td width="20%"><strong>Tahun Terbit<strong></td>
                         <td width="80%"><?php echo $tahun_terbit;?></td>
                    </tr>
                    <tr>
                        <td><strong>Tag<strong></td>
                        <td>
                        <ul>
                        <?php
                       //get tag
                       $sql_h = "SELECT `t`.`tag` from `tag_buku` `tb`
                                inner join `tag` `t`  ON  `tb`.`id_tag` = `t`.`id_tag` 
                                where `tb`.`id_buku`='$id_buku'";
                       $query_h = mysqli_query($koneksi,$sql_h);
                       while($data_h = mysqli_fetch_row($query_h)){
                       $tag= $data_h[0];
                       ?>
                       <li><?php echo $tag;?></li>
                       <?php }?>
                       </ul>
                       </td>
                     </tr>
                     <tr>
                        <td width="20%"><strong>Sinopsis<strong></td>
                        <td width="80%"><?php echo $sinopsis;?></td>
                     </tr> 
                  </tbody>
                </table>

            </div><!-- .table-responsive -->

          </div><!-- /.blog-main -->
      
          <aside class="col-md-3 katalog-sidebar">
      
            
           <div class="pl-4 pb-4">
              <h4 class="font-italic">Buku Terkait</h4>
              <ol class="list-unstyled mb-0">
                <li><a href="#">Data Mining</a></li>
                <li><a href="#">Implementasi Neural Network</a></li>
                <li><a href="#">Deep Learning untuk Machine Learning</a></li>
                <li><a href="#">Python untuk Machine Learning</a></li>
              </ol>
            </div>

            <div class="pl-4 pb-4">
              <h4 class="font-italic">Categories</h4>
              <ol class="list-unstyled mb-0">
                <li><a href="#">Umum</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">Java</a></li>
                <li><a href="#">Database</a></li>
                <li><a href="#">Techno</a></li>
            </div>
      
            <div class="p-4">
              <h4 class="font-italic">Tag</h4>
              <ol class="list-unstyled">
                <li><a href="#">PHP</a></li>
                <li><a href="#">MySQL</a></li>
                <li><a href="#">Javascript</a></li>
              </ol>
            </div>
          </aside><!-- /.blog-sidebar -->
      
        </div><!-- /.row -->
      
      </main><!-- /.container -->
    </section><br><br>
    <footer class="bg-primary text-dark">
        <div class="container">
          <p class="float-right">
            <a href="#" class="text-white">Back to top</a>
          </p>
          <p>&copy; <b>2021 Vokasi UB.</b> All rights reserved.</p>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>