<section id="blog-header">
      <div class="container">
        <h1 class="text-white">BLOG</h1>
      </div>
    </section><br><br>
    <section id="blog-list">
      <main role="main" class="container">
        <div class="row">
          <div class="col-md-9 blog-main">
            <?php 
              $sql_blog = "SELECT user.nama, blog.tanggal, blog.judul, blog.isi, blog.id_blog FROM blog INNER JOIN user ON blog.id_user = user.id_user ORDER BY blog.id_blog DESC";
              $query_blog = mysqli_query($koneksi, $sql_blog);
              while($data = mysqli_fetch_assoc($query_blog)){
                $judul = $data['judul'];
                $tanggal = $data['tanggal'];
                $isi = $data['isi'];
                $nama = $data['nama'];
                $id_blog = $data['id_blog'];
             ?>
            <div class="blog-post">
              <h2 class="blog-post-title"><a href="detail-blog-blog-<?php echo $id_blog ?>"><?php echo $judul; ?></a></h2>
              <p class="blog-post-meta"><?php echo $tanggal; ?> by <a href="#"><?php echo $nama; ?></a></p>
              <!--<img src="slideshow/slide-1.jpg" class="img-fluid" alt="Responsive image"><br><br>-->
      
              <p><?php echo substr($isi,0,200) ?>....</p>
                <a href="detail-blog-blog-<?php echo $id_blog ?>" class='btn btn-primary'>Baca selengkapnya</a>
              </div>
              <hr>
              <br>
            <?php } ?>
      
            <!-- /.blog-post --><br><br>
      
            <nav class="blog-pagination">
              <a class="btn btn-outline-primary" href="#">Older</a>
              <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </nav>
      
          </div><!-- /.blog-main -->
      
          <aside class="col-md-3 blog-sidebar">
      
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
      
            
          </aside><!-- /.blog-sidebar -->
      
        </div><!-- /.row -->
      
      </main><!-- /.container -->
    </section><br><br>
    