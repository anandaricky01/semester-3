<?php 
  $id_departemen = $_GET['data'];

  $sql = "SELECT * FROM `departemen` WHERE `departemen`.`id_departemen` = '$id_departemen'";

  $sql_proker = "SELECT `proker` FROM `proker` WHERE `id_departemen` = '$id_departemen'";

  $query = mysqli_query($koneksi, $sql);
  $query_proker = mysqli_query($koneksi, $sql_proker);

  while($data = mysqli_fetch_assoc($query)){
    $departemen = $data['departemen'];
    $kepanjangan = $data['kepanjangan'];
    $deskripsi = $data['deskripsi'];
    $logo = $data['logo'];
  }

 ?>
<div class="mt-5"></div>
<div class="container">
	    <!-- Main content -->
	    <section class="content">
	    	<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="departemen">departemen</a></li>
				    <li class="breadcrumb-item active" aria-current="page"><?php echo $departemen; ?></li>
				  </ol>
				</nav>
	            <div class="card">
	                <table class="table table-bordered">
	                  <tbody>  
	                      <tr>
	                         <td colspan="2"><i class="fas fa-user-circle"></i>  
	                          <strong>departemen<strong></td>
	                      </tr>              
	                      <tr>
	                          <td width="20%"><strong>Nama departemen<strong></td>
	                          <td width="80%"><?php echo $departemen; ?></td>
	                      </tr>   
	                      <tr>
	                          <td width="20%"><strong>Kepanjangan<strong></td>
	                          <td width="80%"><?php echo $kepanjangan; ?></td>
	                      </tr>    
	                      <tr>
	                          <td width="20%"><strong>Logo<strong></td>
	                          <td width="80%"><?php echo $logo; ?></td>
	                      </tr>       
	                      <tr>
	                          <td width="20%"><strong>Deskripsi<strong></td>
	                          <td width="80%"><?php echo $deskripsi;?></td>
	                      </tr>  
	                      <tr>
	                          <td width="20%"><strong>Program Kerja<strong></td>
	                          <td width="80%">
	                          	<ul>
	                          		<?php while ($data_proker = mysqli_fetch_assoc($query_proker)) {
	                          		$proker = $data_proker['proker'];
	                          		?>
	                          			<li>
	                          				<?php echo $proker; ?>
	                          			</li>
	                          		<?php } ?>
	                          	</ul>
	                          	
	                          	</td>
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