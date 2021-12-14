<?php 

  $sql_kategori_kegiatan = "SELECT `id_kategori_kegiatan`,`kategori_kegiatan` FROM `kategori_kegiatan`";
  $query_kategori_kegiatan = mysqli_query($koneksi, $sql_kategori_kegiatan);
 ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><i class="fas fa-plus"></i> Tambah kegiatan</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="kegiatan.php">Data kegiatan</a></li>
          <li class="breadcrumb-item active">Tambah kegiatan</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

  <!-- Main content -->
  <section class="content">

  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data kegiatan</h3>
      <div class="card-tools">
        <a href="kegiatan.php" class="btn btn-sm btn-warning float-right">
        <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
      </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    </br></br>
    <div class="col-sm-10">
      <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
         <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data 
            <?php echo $_GET['jenis'];?> wajib di isi</div>
         <?php }?>
      <?php }?>
    </div>
    <form class="form-horizontal" method="POST" action="konfirmasi-tambah-kegiatan" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group row">
          <label for="nim" class="col-sm-3 col-form-label">Kegiatan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="kegiatan" id="nim" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="kategori" class="col-sm-3 col-form-label">Kategori kegiatan</label>
          <div class="col-sm-7">
            <select class="form-control" id="kategori" name="id_kategori_kegiatan">
              <option value="0"> - Pilih Kategori -</option>
              <?php 
                while($data = mysqli_fetch_assoc($query_kategori_kegiatan)){
                  $kategori_kegiatan = $data['kategori_kegiatan'];
                  $id_kategori_kegiatan = $data['id_kategori_kegiatan'];
               ?>
               <option value="<?php echo $id_kategori_kegiatan; ?>"> <?php echo $kategori_kegiatan; ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="foto" class="col-sm-3 col-form-label">Foto </label>
          <div class="col-sm-7">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="foto" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>  
          </div>
        </div>
        <div class="form-group row">
          <label for="isi" class="col-sm-3 col-form-label">Isi</label>
          <div class="col-sm-7">
            <textarea class="form-control" name="isi" id="editor1" rows="12"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="nim" class="col-sm-3 col-form-label">Tanggal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="tanggal" id="datepicker" value="">
          </div>
        </div>
        </div>
      </div>

    </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <div class="col-sm-12">
          <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
        </div>  
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
  <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
