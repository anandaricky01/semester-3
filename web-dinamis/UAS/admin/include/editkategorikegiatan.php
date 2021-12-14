<?php 
  if(isset($_GET['data'])){
    $id_kategori_kegiatan = $_GET['data'];
    $_SESSION['id_kategori_kegiatan']=$id_kategori_kegiatan;
    
      //get data kategori Kegiatan
    $sql_d = "SELECT `kategori_kegiatan` from `kategori_kegiatan` where `id_kategori_kegiatan` = '$id_kategori_kegiatan'";
    $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
       $kategori_kegiatan= $data_d[0];
    }
  }
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit kategori Kegiatan</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="kategori-kegiatan">kategori Kegiatan</a></li>
              <li class="breadcrumb-item active">Edit kategori Kegiatan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit kategori Kegiatan</h3>
        <div class="card-tools">
          <a href="kategori-kegiatan" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
          <?php if(!empty($_GET['notif'])){?>
             <?php if($_GET['notif']=="editkosong"){?>
                <div class="alert alert-danger" role="alert">
                Maaf data kategori Kegiatan wajib di isi</div>
             <?php }?>
          <?php }?>
      </div>
      <form class="form-horizontal" action="konfirmasi-edit-kategori-kegiatan"  method="post">
          <div class="card-body">
            <div class="form-group row">
              <label for="kategori_kegiatan" class="col-sm-3 col-form-label">
                kategori Kegiatan
              </label>
              <div class="col-sm-7">
                  <input type="text" class="form-control" id="kategori_kegiatan" Name="kategori_kegiatan" value="<?php echo $kategori_kegiatan;?>">
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
             <div class="col-sm-10">
                <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
             </div>  
          </div>
          <!-- /.card-footer -->
        </form>

    </div>
    <!-- /.card -->

    </section>
    