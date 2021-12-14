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

  $batas = 10;

  if(!isset($_GET['halaman'])){
       $posisi = 0;
       $halaman = 1;
  }else{
       $halaman = $_GET['halaman'];
       $posisi = ($halaman-1) * $batas;
  }

  $sql_tabel = "SELECT * FROM `ketinggian` LIMIT $posisi, $batas";

  $query_tabel = mysqli_query($koneksi, $sql_tabel);
  $query_x = mysqli_query($koneksi, "SELECT id_data FROM `ketinggian` LIMIT $posisi, $batas");
  $query_y = mysqli_query($koneksi, "SELECT nilai_sensor FROM `ketinggian` LIMIT $posisi, $batas");
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
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tabel Data</h1>
      </div>

      <div class="table-responsive">
        <table class="table">
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
      <!-- /.card-body -->
        <div class="card-footer clearfix mb-3">
          <ul class="pagination pagination-sm m-0 float-right">
            <?php 
                //hitung jumlah semua data 
                $sql_jum = "SELECT * FROM `ketinggian`";  
                $sql_jum .= " ORDER BY `id_data`";

                $query_jum = mysqli_query($koneksi,$sql_jum);
                $jum_data = mysqli_num_rows($query_jum);
                $jum_halaman = ceil($jum_data/$batas);

                if($jum_halaman==0){
                   //tidak ada halaman
                }else if($jum_halaman==1){
                   echo "<li class='page-item'><a class='page-link'>1</a></li>";
                }else{
                   $sebelum = $halaman-1;
                   $setelah = $halaman+1;
                   if($halaman!=1){
                         echo "<li class='page-item'><a class='page-link' 
                         href='index.php?halaman=1'>First</a></li>";
                         echo "<li class='page-item'><a class='page-link' 
                         href='index.php?halaman=$sebelum'>«</a></li>";
                       }

                       for($i=1; $i<=$jum_halaman; $i++){
                           if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                              if($i!=$halaman){
                                  echo "<li class='page-item'><a class='page-link' 
                                  href='index.php?halaman=$i'>$i</a></li>";
                              }else{
                                  echo "<li class='page-item active'><a class='page-link'>$i</a></li>";
                              }
                           }
                        }


                        if($halaman!=$jum_halaman){
                           echo "<li class='page-item'><a class='page-link' 
                           href='index.php?halaman=$setelah'>
                           »</a></li>";
                           echo "<li class='page-item'><a class='page-link' 
                           href='index.php?halaman=$jum_halaman'>Last</a></li>";
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

          // Graphs
          var ctx = document.getElementById('myChart')
          // eslint-disable-next-line no-unused-vars
          var myChart = new Chart(ctx, {
            type: 'line',
            data: {
              labels: [
                <?php 
                while($x = mysqli_fetch_assoc($query_x)){
                  echo "'" . $x['id_data'] . "',";
                }
                ?>
              ],
              datasets: [{
                data: [
                  <?php 
                while($y = mysqli_fetch_assoc($query_y)){
                  echo "'" . $y['nilai_sensor'] . "',";
                }
                ?>
                ],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointBackgroundColor: '#007bff'
              }]
            },
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: false
                  }
                }]
              },
              legend: {
                display: false
              }
            }
          })
        })()
      </script>
  </body>
</html>
