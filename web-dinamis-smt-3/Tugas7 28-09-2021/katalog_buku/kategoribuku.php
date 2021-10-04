<?php 
  include('koneksi/koneksi.php');
  if((isset($_GET['aksi']))&&(isset($_GET['data']))){
    if($_GET['aksi']=='hapus'){
      $id_kategori_buku = $_GET['data'];
      //hapus kategori buku
      $sql_dh = "delete from `kategori_buku` 
      where `id_kategori_buku` = '$id_kategori_buku'";
      mysqli_query($koneksi,$sql_dh);
    }
  }
?>


<!DOCTYPE html>
<html>
<head>
<?php include("admin/includes/head.php") ?> 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php include("admin/includes/header.php") ?>

  <?php include("admin/includes/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-address-book"></i> Kategori Buku</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Kategori Buku</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  Kategori Buku</h3>
                <div class="card-tools">
                  <a href="tambahkategoribuku.php" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah  Kategori Buku</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form class="form-horizontal" method="post" action="konfirmasitambahkategoribuku.php">
                     <div class="card-body">
                       <div class="form-group row">
                          <label for="kategoribuku" class="col-sm-3 col-form-label">Kategori Buku</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="kategoribuku" name="kategori_buku" value="">
                          </div>
                       </div>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                       <div class="col-sm-10">
                          <button type="submit" class="btn btn-info float-right">
                          <i class="fas fa-plus"></i> Tambah</button>
                        </div>  
                     </div>
                     <!-- /.card-footer -->
                   </form>

                </div><br>
              <div class="col-sm-12">
                   <?php if(!empty($_GET['notif'])){?>
                       <?php if($_GET['notif']=="tambahberhasil"){?>
                             <div class="alert alert-success" role="alert">
                             Data Berhasil Ditambahkan</div>
                       <?php } else if($_GET['notif']=="editberhasil"){?>
                             <div class="alert alert-success" role="alert">
                             Data Berhasil Diubah</div>
                       <?php } else if($_GET['notif']=="hapusberhasil"){?>
                             <div class="alert alert-success" role="alert">
                             Data Berhasil Dihapus</div>
                       <?php }?>
                    <?php }?>
                </div>

                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th width="5%">No</th>
                      <th width="80%">Kategori Buku</th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $sql_k = "SELECT `id_kategori_buku`,`kategori_buku` FROM `kategori_buku` ORDER BY `kategori_buku`";
                      $query_k = mysqli_query($koneksi,$sql_k);
                      $no = 1;
                      while($data_k = mysqli_fetch_row($query_k)){
                         $id_kategori_buku = $data_k[0];
                         $kategori_buku = $data_k[1];
                    ?>
                    <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $kategori_buku;?></td>
                      <td align="center">
                      <a href="editkategoribuku.php?data=<?php echo $id_kategori_buku;?>"class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
                      <a href="javascript:if(confirm('Anda yakin ingin menghapus data 
                        <?php echo $kategori_buku; ?>?'))window.location.href =  
                       'kategoribuku.php?aksi=hapus&data=<?php echo 
                        $id_kategori_buku;?>&notif=hapusberhasil'" 
                        class="btn btn-xs btn-warning"><i class="fas fa-trash"></i>  
                        Hapus
                      </a>
                      </td>
                   </tr>
                   <?php $no++;}?>
                   </tbody>
                </table>

              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("admin/includes/footer.php") ?>

</div>
<!-- ./wrapper -->

<?php include("admin/includes/script.php") ?>
</body>
</html>