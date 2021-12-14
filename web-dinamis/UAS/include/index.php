

  <!-- jumbo tron -->

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="img/HIMATIF.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="400" height="400" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Himpunan Mahasiswa Teknologi Informasi dan Komputer</h1>
        <p class="lead">Solidaritas tanpa batas!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a class="btn btn-primary btn-lg px-4 me-md-2" href="#pengertian-himatif">Read More</a>
        </div>
      </div>
    </div>
  </div>
    <!-- akhir jumbotron -->

    <!-- pengertian himatif -->
    <div class="mt-5"></div>
    <div class="bg-light" id="pengertian-himatif">
      <div class="container">
        <div class="row align-items-center py-5">
          <div class="col-md-6"> 
            <img src="img/HIMATIF.png" width="350" height="350">
          </div>
          <div class="col-md-6">
            <p>
            <strong>Himpunan Mahasiswa Teknologi Informasi dan Komputer </strong>(HIMATIF) adalah Himpunan yang mewadahi minat dan bakat Mahasiswa Bidang Keahlian Teknologi Informasi dan Komputer serta melaksanakan kegiatan yang menunjang akademik maupun non-akademik di lingkup Bidang Keahlian Teknologi Informasi dan Komputer yang bersifat eksekutif, aspiratif, dan advokatif
            </p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- akhir pengertian himatif -->

    <!-- Visi & Misi -->
    <div id="visi-misi" class="mt-5 py-5">
      <div class="row justify-content-center">
        <div class="col-md-1">
          <h2>Visi</h2>
        </div>
      </div>
      <div class="row justify-content-center mt-2">
        <div class="col-md-6">
          <p class="lead">Membangun Himpunan Mahasiswa TIK menjadi organisasi yang lebih aktif, berintegritas, dan solidaritas yang lebih aktif dengan asas kekeluargaan yang baik serta menjadi wadah aspirasi mahasiswa TIK</p>
        </div>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-md-1">
          <h2>Misi</h2>
        </div>
      </div>
      <div class="row justify-content-center mt-2">
        <div class="col-md-6">
          <ul class="lead">
            <li>Menggerak setiap departemen HIMATIF bekerjasama dengan lingkungan internal dan eksternal Universitas Brawijaya</li>
            <li>
              Merealisasikan Aspirasi anggota HIMATIF dengan melihat aspek kebutuhan anggota dan pengurus HIMATIF
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- akhir visi & misi -->

    <!-- Kegiatan -->

      <div class="bg-light" id="kegiatan">
        <div class="container py-5 mt-5">
          <div class="row justify-content-center">
            <div class="col-md-1">
              <h2>Kegiatan</h2>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
            <?php
              $sql = "SELECT `foto`, `kegiatan`, `isi`, `tanggal`, `id_kegiatan` FROM `kegiatan`";
              $query = mysqli_query($koneksi, $sql);
              while($data = mysqli_fetch_assoc($query)){ 
                $foto = $data['foto'];
                $kegiatan = $data['kegiatan'];
                $isi = $data['isi'];
                $isi = substr($isi, 0, 30) . '...';
                $id_kegiatan = $data['id_kegiatan'];
                $tanggal = $data['tanggal'];
            ?>
            <div class="col">
              <div class="card">
                <img src="img/<?php echo $foto ?>" class="card-img-top" alt="..." >
                <div class="card-body">
                  <h5 class="card-title"><?php echo $kegiatan; ?></h5>
                  <p class="card-text"><?php echo $isi; ?></p>
                  <a class="btn btn-primary btn-sm" href="kegiatan&data=<?php echo $id_kegiatan; ?>">Read More</a>
                </div>
              </div>
            </div>
          <?php } ?>
          </div>
          <div class="row justify-content-start pt-4">
            <div class="col">
              <a class="btn btn-primary btn-md px-4" href="kegiatan">Lihat Lebih Lanjut</a>
            </div>
          </div>
        </div>
      </div>
    <!-- akhir Kegiatan -->
