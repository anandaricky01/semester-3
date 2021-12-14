<?php 
  
  $id_proker = $_GET['data'];
  //get proker
  $sql = "SELECT `proker`.`proker`, `proker`.`deskripsi`, `departemen`.`departemen`, `kategori_kegiatan`.`kategori_kegiatan` FROM `proker` INNER JOIN `departemen` ON `proker`.`id_departemen` = `departemen`.`id_departemen` INNER JOIN `kategori_kegiatan` ON `proker`.`id_kategori_kegiatan` = `kategori_kegiatan`.`id_kategori_kegiatan` WHERE `id_proker`='$id_proker'";
   //echo $sql;
  $query = mysqli_query($koneksi, $sql);
  while($data = mysqli_fetch_assoc($query)){
    $proker = $data['proker'];
    $departemen = $data['departemen'];
    $deskripsi = $data['deskripsi'];
    $kategori_kegiatan = $data['kategori_kegiatan'];
  }

?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> proker</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">proker</li>
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
                  <a href="index.php?include=edit-proker&data=<?php echo $id_proker; ?>" class="btn btn-sm btn-info float-right"><i class="fas fa-edit"></i> Edit proker</a>
                  <a href="proker" class="btn btn-sm btn-warning float-right">
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
                          <strong>proker<strong></td>
                      </tr>              
                      <tr>
                          <td width="20%"><strong>Nama proker<strong></td>
                          <td width="80%"><?php echo $proker; ?></td>
                      </tr>
                      <tr>
                          <td width="20%"><strong>Kategori Kegiatan<strong></td>
                          <td width="80%"><?php echo $kategori_kegiatan; ?></td>
                      </tr>
                      <tr>
                          <td width="20%"><strong>Departemen<strong></td>
                          <td width="80%"><?php echo $departemen; ?></td>
                      </tr>                  
                      <tr>
                          <td width="20%"><strong>Deskripsi<strong></td>
                          <td width="80%"><?php echo $deskripsi;?></td>
                      </tr> 
                  </tbody>
                </table>  

              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>
   
  
