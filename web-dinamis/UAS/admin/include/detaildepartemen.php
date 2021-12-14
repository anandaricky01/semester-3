<?php 
  
  $id_departemen = $_GET['data'];
  //get Departemen
  $sql = "SELECT * from `departemen`
   where `id_departemen`='$id_departemen'";
   //echo $sql;
  $query = mysqli_query($koneksi, $sql);
  while($data = mysqli_fetch_row($query)){
    $id_departemen = $data[0];
    $departemen = $data[1];
    $deskripsi = $data[2];
  }

?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Departemen</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Departemen</li>
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
                  <a href="index.php?include=edit-departemen&data=<?php echo $id_departemen; ?>" class="btn btn-sm btn-info float-right"><i class="fas fa-edit"></i> Edit Departemen</a>
                  <a href="departemen" class="btn btn-sm btn-warning float-right">
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
                          <strong>Departemen<strong></td>
                      </tr>              
                      <tr>
                          <td width="20%"><strong>Nama Departemen<strong></td>
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
   
  
