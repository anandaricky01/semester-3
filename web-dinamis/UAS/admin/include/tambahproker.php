<?php 

  $sql = "SELECT `id_departemen`, `departemen` FROM `departemen`";
  $query = mysqli_query($koneksi, $sql);

  $sql_kegiatan = "SELECT * FROM `kategori_kegiatan`";
  $query_kegiatan = mysqli_query($koneksi, $sql_kegiatan);

 ?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah proker</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="proker">proker</a></li>
              <li class="breadcrumb-item active">Tambah proker</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah proker</h3>
        <div class="card-tools">
          <a href="proker" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
          <?php if(!empty($_GET['notif'])){?>
            <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">
            Maaf data proker wajib di isi</div>
            <?php }?>
          <?php }?>
      </div>
      <form class="form-horizontal" method="POST" action="konfirmasi-tambah-proker">
        <div class="card-body">
          <div class="form-group row">
            <label for="proker" class="col-sm-3 col-form-label">Program Kerja</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="proker" value="" name="proker">
            </div>
          </div>
          <div class="form-group row">
            <label for="proker" class="col-sm-3 col-form-label">Departemen</label>
            <div class="col-sm-7">
              <select class="form-control" name="departemen">
                <?php while ($data = mysqli_fetch_assoc($query)) {
                  $id_departemen = $data['id_departemen'];
                  $departemen = $data['departemen'];
                ?>
                  <option value="<?php echo $id_departemen; ?>"><?php echo $departemen; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="proker" class="col-sm-3 col-form-label">Tipe Kegiatan</label>
            <div class="col-sm-7">
              <select class="form-control" name="id_kategori_kegiatan">
                <?php while ($data_kegiatan = mysqli_fetch_assoc($query_kegiatan)) {
                  $kategori_kegiatan = $data_kegiatan['kategori_kegiatan'];
                  $id_kategori_kegiatan = $data_kegiatan['id_kategori_kegiatan'];
                ?>
                  <option value="<?php echo $id_kategori_kegiatan; ?>"><?php echo $id_kategori_kegiatan; ?> - <?php echo $kategori_kegiatan; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="isi" class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="deskripsi" id="editor1" rows="12"></textarea>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
    