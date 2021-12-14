<?php 
  
  session_start();
  
  if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] != true) {
      header('Location:login.php');
      die;
    }
  } else {
    header('Location:login.php');
      die;
  }
  
  include("koneksi.php");

  $batas = 5;

  if(!isset($_GET['halaman'])){
       $posisi = 0;
       $halaman = 1;
  }else{
       $halaman = $_GET['halaman'];
       $posisi = ($halaman-1) * $batas;
  }

  $sql_tabel = "SELECT * FROM `ketinggian` LIMIT $posisi, $batas";

  $query_tabel = mysqli_query($koneksi, $sql_tabel);
  $data = array();

  foreach ($query_tabel as $query) {
    $data[] = $query;
  }

?>
 
  <?php include('include/head.php'); ?>

  <body>
    
  <?php include('include/header.php'); ?>

<div class="container-fluid">
  <div class="row">
    
    <?php include('include/navbar.php'); ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="mt-3"></div>
      <h2>Tabel Data</h2>
      <div class="table-responsive">
        <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">ID Data</th>
            <th scope="col">Nama Sensor</th>
            <th scope="col">Nilai</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 0;
          foreach ($data as $key) {
            ?>
          <tr>
            <th scope="row"><?php echo $data[$i]['id_data']; ?></th>
            <td><?php echo $data[$i]['id_sensor']; ?></td>
            <td><?php echo $data[$i]['nilai_sensor']; ?></td>
          </tr>
          <?php $i++;} ?>
        </tbody>
      </table>
      </div>
      <?php 
        //hitung jumlah semua data 
            $sql_jum = "SELECT * FROM `ketinggian`";  
            $sql_jum .= " ORDER BY `id_data`";

            $query_jum = mysqli_query($koneksi,$sql_jum);
            $jum_data = mysqli_num_rows($query_jum);
            $jum_halaman = ceil($jum_data/$batas);
          ?>

        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <?php 
                if($jum_halaman==0){
                   //tidak ada halaman
                }else if($jum_halaman==1){
                   echo "<li class='page-item'><a class='page-link'>1</a></li>";
                }else{
                   $sebelum = $halaman-1;
                   $setelah = $halaman+1;
                   if($halaman!=1){
                         echo "<li class='page-item'><a class='page-link' 
                         href='tabel.php?halaman=1'>First</a></li>";
                         echo "<li class='page-item'><a class='page-link' 
                         href='tabel.php?halaman=$sebelum'>«</a></li>";
                       }

                       for($i=1; $i<=$jum_halaman; $i++){
                           if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                              if($i!=$halaman){
                                  echo "<li class='page-item'><a class='page-link' 
                                  href='tabel.php?halaman=$i'>$i</a></li>";
                              }else{
                                  echo "<li class='page-item active'><a class='page-link'>$i</a></li>";
                              }
                           }
                        }


                        if($halaman!=$jum_halaman){
                           echo "<li class='page-item'><a class='page-link' 
                           href='tabel.php?halaman=$setelah'>
                           »</a></li>";
                           echo "<li class='page-item'><a class='page-link' 
                           href='tabel.php?halaman=$jum_halaman'>Last</a></li>";
                         }
                  }?>
          </ul>
        </div>
      </div>
    </main>
  </div>
</div>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script type="text/javascript">
        /* globals Chart:false, feather:false */
        (function () {
          'use strict'

          feather.replace({ 'aria-hidden': 'true' })
      </script>
  </body>
</html>
