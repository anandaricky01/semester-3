  <?php 

    $sql = "SELECT `kegiatan`.`foto`, `kegiatan`.`kegiatan`, `kegiatan`.`isi`, `kegiatan`.`tanggal`, `kegiatan`.`id_kegiatan`, `kategori_kegiatan`.`kategori_kegiatan` FROM `kegiatan` INNER JOIN `kategori_kegiatan` ON `kategori_kegiatan`.`id_kategori_kegiatan` = `kegiatan`.`id_kategori_kegiatan`";

    $query = mysqli_query($koneksi, $sql);
   ?>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Kegiatan HIMATIF</h1>
        <p class="lead text-muted">Semua yang kami lakukan ada di sini</p>
      </div>
    </div>
  </section>

  
      <!-- ------------------------------------------------------------ -->
    <div class="container px-4 py-5" id="custom-cards">
      <h2 class="pb-2 border-bottom">Custom cards</h2>

      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <?php while($data = mysqli_fetch_assoc($query)){ 
            $foto = $data['foto'];
            $kegiatan = $data['kegiatan'];
            $id_kegiatan = $data['id_kegiatan'];
            $tanggal = $data['tanggal'];
            $kategori_kegiatan = $data['kategori_kegiatan'];
          ?>
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('img/<?php echo $foto; ?>');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <a href="detail-kegiatan&data=<?php echo $id_kegiatan; ?>" style="text-decoration:none">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold text-white"><?php echo $kegiatan; ?></h2>
              </a>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                  <small><?php echo $kategori_kegiatan; ?></small>
                </li>
                <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                  <small><?php echo $tanggal; ?></small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    <!-- ------------------------------------------------------------ -->
  </div>