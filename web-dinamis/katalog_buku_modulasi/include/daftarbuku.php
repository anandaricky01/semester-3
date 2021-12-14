<?php 

  if (isset($_GET['data'])) {
    $kategori = $_GET['data'];
  }

  if (isset($_GET['search'])) {
    $search = $_GET['search'];
  }

  $batas = 5;
  $index = 0;

  $sql_kategori = "SELECT buku.id_buku, buku.judul, penerbit.penerbit, buku.cover FROM buku INNER JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit WHERE buku.id_kategori_buku = $kategori LIMIT $index, $batas";

  $sql_judul = "SELECT kategori_buku FROM kategori_buku WHERE id_kategori_buku = $kategori";

  $judul = mysqli_fetch_assoc(mysqli_query($koneksi, $sql_judul));
  $query_kategori = mysqli_query($koneksi, $sql_kategori);
 ?>

<section id="blog-header">
      <div class="container">
        <h1 class="text-white">DAFTAR BUKU</h1>
      </div>
    </section><br><br>
    
    <section id="katalog-item">
      <main role="main" class="container">
        <h2 class="text-primary">CATEGORIES: <?php echo $judul['kategori_buku']; ?></h2><br><br>
        <div class="row">
          <div class="col-md-9 katalog-main">
            <div class="row">
              <?php 



                while ($data = mysqli_fetch_assoc($query_kategori)) {
                $id_buku = $data['id_buku'];
                $judul = $data['judul'];
                $penerbit = $data['penerbit'];
                $cover = $data['cover'];
                

               ?>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img src="admin/cover/<?php echo $cover; ?>" class="img-fluid" alt="Books Collection" title="Books">
                  <div class="card-body bg-warning">
                    <p class="card-text"><?php echo $judul; ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a href="detail-buku-data-<?php echo $id_buku;?>" class="btn btn-primary stretched-link">Detail</a>
                      </div>
                      <small class="text-muted"><?php echo $penerbit; ?></small>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>

            <div class="col-sm-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="" ><strong>first</strong></a></li>
                      <li class="page-item"><a class="page-link"  href="">1</a></li> 
                      <li class="page-item active"><a class="page-link"  href="">2</a></li> 
                      <li class="page-item"><a class="page-link"  href="">3</a></li> 
                      <li class="page-item"><a class="page-link" href=""><strong>last</strong></a></li>
                  </ul>
                </nav>
            </div>  

            </div><!-- .row-->
          </div><!-- /.katalog-main -->
      
          <aside class="col-md-3 katalog-sidebar">
      
            <div class="pl-4 pb-4">
               <h4 class="font-italic">Buku Terkait</h4>
               <ol class="list-unstyled mb-0">
                   <?php 
                   $sql_bt = "SELECT `id_buku`,`judul` FROM `buku` WHERE 
                   `id_kategori_buku`='$id_kategori_buku'
                   ORDER BY rand() LIMIT 5";
                   $query_bt = mysqli_query($koneksi,$sql_bt);
                   while($data_bt = mysqli_fetch_row($query_bt)){
                      $id_buku_terkait = $data_bt[0];
                      $judul_buku_terkait = $data_bt[1];
                   ?>
                   <li><a href="index.php?include=detail-buku&
                   data=<?php echo $id_buku_terkait;?>">
                   <?php echo $judul_buku_terkait;?></a></li>
                   <?php }?>
               </ol>
            </div>


            <div class="pl-4 pb-4">
                <h4 class="font-italic">Kategori</h4>
                <ol class="list-unstyled mb-0">
                  <?php 
                  $sql_k = "SELECT `id_kategori_buku`,`kategori_buku` 
                  FROM `kategori_buku`
                  ORDER BY `kategori_buku`";
                  $query_k = mysqli_query($koneksi,$sql_k);
                  while($data_k = mysqli_fetch_row($query_k)){
                      $id_kat = $data_k[0];
                      $nama_kat = $data_k[1];
                  ?>
                      <li><a href="index.php?include=daftar-buku-kategori&
                      data=<?php echo $id_kat;?>">
                      <?php echo $nama_kat;?></a></li>
                  <?php }?>
                </ol>
            </div>

      
            <div class="p-4">
               <h4 class="font-italic">Tag</h4>
               <ol class="list-unstyled">
                  <?php 
                  $sql_t = "SELECT `id_tag`,`tag` FROM `tag`
                            ORDER BY `tag`";
                  $query_t = mysqli_query($koneksi,$sql_t);
                  while($data_t = mysqli_fetch_row($query_t)){
                     $id_tag = $data_t[0];
                     $nama_tag = $data_t[1];
                  ?>
                     <li><a href="index.php?include=daftar-buku-tag&
                     data=<?php echo $id_tag;?>">
                      <?php echo $nama_tag;?></a></li>
                  <?php }?>
               </ol>
            </div>
          </aside> <!-- /.katalog-sidebar -->
      
        </div><!-- /.row -->
      </main><!-- /.container -->
    </section><br><br>
    