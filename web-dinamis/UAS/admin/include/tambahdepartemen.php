
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah departemen</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="departemen">departemen</a></li>
              <li class="breadcrumb-item active">Tambah departemen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah departemen</h3>
        <div class="card-tools">
          <a href="departemen" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
          <?php if(!empty($_GET['notif'])){?>
            <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">
            Maaf data departemen wajib di isi</div>
            <?php }?>
          <?php }?>
      </div>
      <form class="form-horizontal" method="POST" action="konfirmasi-tambah-departemen">
        <div class="card-body">
          <div class="form-group row">
            <label for="departemen" class="col-sm-3 col-form-label">departemen</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="departemen" value="" name="departemen">
            </div>
          </div>
          <div class="form-group row">
            <label for="isi" class="col-sm-3 col-form-label">deskripsi</label>
            <div class="col-sm-7">
              <textarea class="form-control" id="editor1" rows="12" name="deskripsi"></textarea>
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
   