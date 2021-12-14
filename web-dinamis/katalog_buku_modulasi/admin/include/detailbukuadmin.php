<?php 
if(isset($_GET['data'])){
  $id_buku = $_GET['data'];
  //gat data buku
  $sql = "SELECT `b`.`cover`,`k`.`kategori_buku`,`b`.`judul`,
        `b`.`pengarang`,`b`.`tahun_terbit`,
        `p`.`penerbit`, `b`.`sinopsis` FROM `buku` `b`
        INNER JOIN `kategori_buku` `k` ON 
        `b`.`id_kategori_buku`=`k`.`id_kategori_buku`
        INNER JOIN `penerbit` `p` ON `b`.`id_penerbit`= `p`.`id_penerbit`
        WHERE `b`.`id_buku`='$id_buku'";
  $query = mysqli_query($koneksi,$sql);
  while($data = mysqli_fetch_row($query)){
    $cover = $data[0];
    $kategori_buku = $data[1];
    $judul = $data[2];
    $pengarang = $data[3];
    $tahun_terbit = $data[4];
    $penerbit = $data[5];
    $sinopsis = $data[6];
  }
 
}
?>

    <section id="katalog-wrapper">
      <main role="main" class="container">
        <div class="row">
            <div class="mt-2">
          <div class="col-md-9 katalog-detail">
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>                      
                    <tr>
                       <td><strong>Cover Buku<strong></td>
                       <td><img src="cover/<?php echo $cover;?>" 
                       class="img-fluid" width="200px;"></td>
                    </tr>               
                    <tr>
                        <td width="20%"><strong>Kategori Buku<strong></td>
                        <td width="80%"><?php echo $kategori_buku;?></td>
                    </tr>                 
                    <tr>
                        <td width="20%"><strong>Judul<strong></td>
                        <td width="80%"><?php echo $judul;?></td>
                    </tr>                 
                    <tr>
                        <td width="20%"><strong>Pengarang<strong></td>
                        <td width="80%"><?php echo $pengarang;?></td>
                    </tr>
                    <tr>
                         <td width="20%"><strong>Pengarang<strong></td>
                         <td width="80%"><?php echo $penerbit;?></td>
                    </tr>
                    <tr>
                         <td width="20%"><strong>Tahun Terbit<strong></td>
                         <td width="80%"><?php echo $tahun_terbit;?></td>
                    </tr>
                    <tr>
                        <td><strong>Tag<strong></td>
                        <td>
                        <ul>
                        <?php
                       //get tag
                       $sql_h = "SELECT `t`.`tag` from `tag_buku` `tb`
                                inner join `tag` `t`  ON  `tb`.`id_tag` = `t`.`id_tag` 
                                where `tb`.`id_buku`='$id_buku'";
                       $query_h = mysqli_query($koneksi,$sql_h);
                       while($data_h = mysqli_fetch_row($query_h)){
                       $tag= $data_h[0];
                       ?>
                       <li><?php echo $tag;?></li>
                       <?php }?>
                       </ul>
                       </td>
                     </tr>
                     <tr>
                        <td width="20%"><strong>Sinopsis<strong></td>
                        <td width="80%"><?php echo $sinopsis;?></td>
                     </tr> 
                  </tbody>
                </table>

            </div><!-- .table-responsive -->

          </div><!-- /.blog-main -->
      </div>
      </div>
  </main>
</section>
      