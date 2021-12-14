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

?>
 
  <?php include('include/head.php'); ?>

  <body>
    
  <?php include('include/header.php'); ?>

<div class="container-fluid">
  <div class="row">
    
    <?php include('include/navbar.php'); ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Anggota Kelompok</h1>
      </div>

      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">NIM</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Cristian Albertus</td>
              <td>203140714111001</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Ananda Ricky Fauzi</td>
              <td>203140714111009</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Faizah Azzahro</td>
              <td>203140714111023</td>
            </tr>
          </tbody>
        </table>
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
