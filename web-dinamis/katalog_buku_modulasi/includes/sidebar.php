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

          </aside><!-- /.blog-sidebar -->