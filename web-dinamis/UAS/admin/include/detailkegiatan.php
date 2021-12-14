<?php 
  $id_kegiatan = $_GET['data'];

  $sql = "SELECT `kategori_kegiatan`.`kategori_kegiatan`, `kegiatan`.`kegiatan`,`kegiatan`.`foto`,`kegiatan`.`isi`,`kegiatan`.`tanggal` FROM `kegiatan` INNER JOIN `kategori_kegiatan` ON `kegiatan`.`id_kategori_kegiatan` = `kategori_kegiatan`.`id_kategori_kegiatan` WHERE `id_kegiatan` = '$id_kegiatan'";

  $query = mysqli_query($koneksi, $sql);

  while($data = mysqli_fetch_assoc($query)){
    $kategori_kegiatan = $data['kategori_kegiatan'];
    $kegiatan = $data['kegiatan'];
    $isi = $data['isi'];
    $foto = $data['foto'];
    $tanggal = $data['tanggal'];
  }

 ?>


<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> kegiatan</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">kegiatan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="edit-kegiatan&data=<?php echo $id_kegiatan; ?>" class="btn btn-sm btn-info float-right"><i class="fas fa-edit"></i> Edit kegiatan</a>
                  <a href="kegiatan" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-12">
                    <?php if(!empty($_GET['notif'])){ 
                      if($_GET['notif']=="editberhasil"){?>
                        <div class="alert alert-success" role="alert">Data Berhasil Diubah</div>
                      <?php }?>
                    <?php }?>
                </div>

                <table class="table table-bordered">
                  <tbody>  
                      <tr>
                         <td colspan="2"><i class="fas fa-user-circle"></i>  
                          <strong>kegiatan<strong></td>
                      </tr>              
                      <tr>
                          <td width="20%"><strong>Nama kegiatan<strong></td>
                          <td width="80%"><?php echo $kegiatan; ?></td>
                      </tr>   
                      <tr>
                          <td width="20%"><strong>Kategori Kegiatan<strong></td>
                          <td width="80%"><?php echo $kategori_kegiatan; ?></td>
                      </tr>    
                      <tr>
                          <td width="20%"><strong>Foto<strong></td>
                          <td width="80%"><img src="../img/<?php echo $foto; ?>" class="img-thumbnail" alt="..." style="width: 100%;"></td>
                      </tr>           
                      <tr>
                          <td width="20%"><strong>Deskripsi<strong></td>
                          <td width="80%"><?php echo $isi;?></td>
                      </tr> 
                      <tr>
                          <td width="20%"><strong>Tanggal (MM/DD/YYYY)<strong></td>
                          <td width="80%"><?php echo $tanggal;?></td>
                      </tr> 
                  </tbody>
                </table>  

              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>