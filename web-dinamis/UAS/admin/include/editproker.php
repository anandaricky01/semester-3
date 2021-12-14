<?php 
  if(isset($_GET['data'])){
    $id_proker = $_GET['data'];
    $_SESSION['id_proker']=$id_proker;
    
      //get data kategori buku
    $sql_d = "SELECT `proker`,`deskripsi`, `id_departemen`, `id_kategori_kegiatan` FROM `proker` WHERE `id_proker` = '$id_proker'";
    $query_d = mysqli_query($koneksi,$sql_d);

    $sql = "SELECT `id_departemen`, `departemen` FROM `departemen`";
    $query = mysqli_query($koneksi, $sql);

    $sql_kategori_kegiatan = "SELECT `id_kategori_kegiatan`, `kategori_kegiatan` FROM `kategori_kegiatan`";
    $query_kategori_kegiatan = mysqli_query($koneksi, $sql_kategori_kegiatan);

    while($data_d = mysqli_fetch_assoc($query_d)){
      $id_departemen = $data_d['id_departemen'];
      $id_kategori_kegiatan = $data_d['id_kategori_kegiatan'];
       $proker= $data_d['proker'];
       $deskripsi= $data_d['deskripsi'];
    }
  }
?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit proker</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="proker">proker</a></li>
              <li class="breadcrumb-item active">Edit proker</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit proker</h3>
        <div class="card-tools">
          <a href="proker" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
          <?php if(!empty($_GET['notif'])){?>
             <?php if($_GET['notif']=="editkosong"){?>
                <div class="alert alert-danger" role="alert">
                Maaf data kategori buku wajib di isi</div>
             <?php }?>
          <?php }?>
      </div>

      <form class="form-horizontal" method="post" 
        action="konfirmasi-edit-proker">
        <div class="card-body">
          <div class="form-group row">
            <label for="proker" class="col-sm-3 col-form-label">proker</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="proker" value="<?php echo $proker;?>" name="proker">
            </div>
          </div>
          <div class="form-group row">
            <label for="proker" class="col-sm-3 col-form-label">Kategori Kegiatan</label>
            <div class="col-sm-7">
              <select class="form-control" name="id_kategori_kegiatan">
                <?php while ($data_kategori_kegiatan = mysqli_fetch_assoc($query_kategori_kegiatan)) {
                  $id_kategori_kegiatan_terpilih = $data_kategori_kegiatan['id_kategori_kegiatan'];
                  $kategori_kegiatan_terpilih = $data_kategori_kegiatan['kategori_kegiatan'];

                  if ($id_kategori_kegiatan_terpilih == $id_kategori_kegiatan) {
                    ?> 
                    <option selected value="<?php echo $id_kategori_kegiatan_terpilih; ?>"><?php echo $id_kategori_kegiatan_terpilih; ?> - <?php echo $kategori_kegiatan_terpilih; ?></option>
                    <?php
                  } else {
                 ?>
                  <option value="<?php echo $id_kategori_kegiatan_terpilih; ?>"><?php echo $id_kategori_kegiatan_terpilih; ?> - <?php echo $kategori_kegiatan_terpilih; ?></option>
                <?php } }?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="proker" class="col-sm-3 col-form-label">Departemen</label>
            <div class="col-sm-7">
              <select class="form-control" name="id_departemen">
                <?php while ($data = mysqli_fetch_assoc($query)) {
                  $id_departemen_terpilih = $data['id_departemen'];
                  $departemen_terpilih = $data['departemen'];

                  if ($id_departemen_terpilih == $id_departemen) {
                    ?> 
                    <option selected value="<?php echo $id_departemen_terpilih; ?>"><?php echo $id_departemen_terpilih; ?> - <?php echo $departemen_terpilih; ?></option>
                    <?php
                  } else {
                 ?>
                  <option value="<?php echo $id_departemen_terpilih; ?>"><?php echo $id_departemen_terpilih; ?> - <?php echo $departemen_terpilih; ?></option>
                <?php } }?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="isi" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="deskripsi" id="editor1" rows="12"><?php echo $deskripsi; ?></textarea>
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
    