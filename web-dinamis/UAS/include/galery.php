  <?php 

    $sql = "SELECT `galeri`.`galeri`, `kategori_kegiatan`.`kategori_kegiatan` FROM `galeri` INNER JOIN `kategori_kegiatan` ON `galeri`.`id_kategori_kegiatan` = `kategori_kegiatan`.`id_kategori_kegiatan`";

    $query = mysqli_query($koneksi, $sql);
   ?>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Galeri Foto</h1>
        <p class="lead text-muted">Semua kenangan tidak hanya ada dalam album foto, melaikan hati pengenang</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php while($data = mysqli_fetch_assoc($query)){ 
          $galeri = $data['galeri'];
          $kategori_kegiatan = $data['kategori_kegiatan'];
          ?>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="galeri/<?php echo $galeri; ?>" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <strong class="card-text"><?php echo $kategori_kegiatan; ?></strong>
              
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>