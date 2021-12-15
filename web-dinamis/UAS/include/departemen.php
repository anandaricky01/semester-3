<?php 

	$sql = "SELECT * FROM `departemen`";
	$query = mysqli_query($koneksi, $sql);
 ?>

<div class="container mt-5">
	<section class="py-4 text-center container">
    	<div class="row">
	      	<div class="col-lg-6 col-md-8 mx-auto">
	      		<img class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" src="foto/HIMATIF.png"></img>
	        	<h1>Departemen</h1>
	        	<p class="lead text-muted">Departemen yang menjadi bagian tubuh HIMATIF dalam menjalankan segala macam program kerja</p>
	      	</div>
	  	</div>
	</section>

	<section class="py-5 text-center container">

	    <div class="row justify-content-center">
	    	<?php while ($data = mysqli_fetch_assoc($query)) {
	    		$logo = $data['logo'];
	    		$departemen = $data['departemen'];
	    		$kepanjangan = $data['kepanjangan'];
	    		$id_departemen = $data['id_departemen'];
	    	 ?>
	    	<div class="col-3 m-3 py-3 bg-light rounded zoom">
	    		<a class="text-decoration-none text-dark" href="detail-departemen&data=<?php echo $id_departemen; ?>">
		    		<div class="row pt-3">
		    			<?php echo $logo; ?>
		    		</div>
		    		<dvi class="row">
			    		<strong style="font-size: 20px;">
			    			<?php echo $departemen; ?>
			    		</strong>
			    		<p class="lead"><?php echo $kepanjangan; ?></p>
		    		</dvi>
	    		</a>
	    	</div>
	    	<?php } ?>
	    </div>
  </section>

</div>