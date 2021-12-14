<?php 
  if(isset($_GET['data'])){
    $id_departemen = $_GET['data'];
    $_SESSION['id_departemen']=$id_departemen;
    
      //get data kategori buku
    $sql_d = "SELECT `departemen`, `deskripsi` FROM `departemen` WHERE `id_departemen` = '$id_departemen'";
    $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
       $departemen= $data_d[0];
       $deskripsi= $data_d[1];
    }
  }
?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit departemen</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="departemen">departemen</a></li>
              <li class="breadcrumb-item active">Edit departemen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit departemen</h3>
        <div class="card-tools">
          <a href="departemen" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
          <?php if(!empty($_GET['notif'])){?>
             <?php if($_GET['notif']=="editkosong"){?>
                <div class="alert alert-danger" role="alert">
                Maaf data departemen wajib di isi</div>
             <?php }?>
          <?php }?>
      </div>
      <form class="form-horizontal" method="POST" action="konfirmasi-edit-departemen">
        <div class="card-body">
          <div class="form-group row">
            <label for="departemen" class="col-sm-3 col-form-label">departemen</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="departemen" name="departemen" value="<?php echo $departemen ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="departemen" class="col-sm-3 col-form-label">departemen</label>
            <div class="col-sm-7">
              <textarea class="form-control" id="deskripsi" name="deskripsi"><?php echo $deskripsi ?></textarea> 
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
    