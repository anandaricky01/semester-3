<?php 

  if (isset($_GET['blog'])) {
      if (!empty($_GET['blog'])) {
        $id_blog = $_GET['blog'];
      }
  }

  $sql_blog = "SELECT blog.judul, blog.tanggal, user.nama, blog.isi FROM `blog` INNER JOIN user ON blog.id_user = user.id_user WHERE blog.id_blog = $id_blog;";
  $query_blog = mysqli_query($koneksi, $sql_blog);
  $data = mysqli_fetch_assoc($query_blog);
 ?>
    <section id="blog-header">
      <div class="container">
        <h1 class="text-white">BLOG</h1>
      </div>
    </section><br><br>
    <section id="blog-list">
      <main role="main" class="container">
        <div class="row">
          <div class="col-md-9 blog-main">
            <div class="blog-post">
              <h2 class="blog-post-title"><?php echo $data['judul']; ?></h2>
              <p class="blog-post-meta"><?php echo $data['tanggal']; ?> - By : <a href="#"><?php echo $data['nama']; ?></a></p>

              <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
              <hr>
              <p><?php echo $data['isi']; ?></p>
            </div><br><br><!-- /.blog-post -->

           

          </div><!-- /.blog-main -->
      
          <aside class="col-md-3 blog-sidebar">
      
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
              <h4 class="font-italic">Archives</h4>
              <ol class="list-unstyled mb-0">
                <li><a href="#">March 2014</a></li>
                <li><a href="#">February 2014</a></li>
                <li><a href="#">January 2014</a></li>
                <li><a href="#">December 2013</a></li>
                <li><a href="#">November 2013</a></li>
                <li><a href="#">October 2013</a></li>
                <li><a href="#">September 2013</a></li>
                <li><a href="#">August 2013</a></li>
                <li><a href="#">July 2013</a></li>
                <li><a href="#">June 2013</a></li>
                <li><a href="#">May 2013</a></li>
                <li><a href="#">April 2013</a></li>
              </ol>
            </div>
      
            
          </aside><!-- /.blog-sidebar -->
      
        </div><!-- /.row -->
      
      </main><!-- /.container -->
    </section><br><br>
    