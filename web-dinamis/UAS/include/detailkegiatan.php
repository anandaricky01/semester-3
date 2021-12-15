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
<div class="mt-5"></div>
<div class="container">
	    <!-- Main content -->
	    <section class="content">
	    	<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="kegiatan">Kegiatan</a></li>
				    <li class="breadcrumb-item active" aria-current="page"><?php echo $kegiatan; ?></li>
				  </ol>
				</nav>
	            <div class="card">
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
	                          <td width="80%"><img src="img/<?php echo $foto; ?>" class="img-thumbnail" alt="..." style="width: 100%;"></td>
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
    </div>