<?php 

  if((isset($_GET['aksi']))&&(isset($_GET['data']))){
    if($_GET['aksi']=='hapus'){
      $id_galeri = $_GET['data'];
      //hapus kategori buku
      $sql_dh = "DELETE from `galeri` where `id_galeri` = '$id_galeri'";
      mysqli_query($koneksi,$sql_dh);
    }
  }

    if(isset($_POST["katakunci"])){
      $katakunci_galeri = $_POST["katakunci"];
      $_SESSION['katakunci_galeri'] = $katakunci_galeri;
    }

    if(isset($_SESSION['katakunci_galeri'])){
      $katakunci_galeri = $_SESSION['katakunci_galeri'];
    }
?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-book-reader"></i> galeri</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> galeri</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  galeri</h3>
                <div class="card-tools">
                  <a href="tambah-galeri" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah  galeri</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body"><br>
              <div class="col-sm-12">
                  <?php if(!empty($_GET['notif'])){?>
                       <?php if($_GET['notif']=="tambahberhasil"){?>
                             <div class="alert alert-success" role="alert">
                             Data Berhasil Ditambahkan</div>
                       <?php } else if($_GET['notif']=="editberhasil"){?>
                             <div class="alert alert-success" role="alert">
                             Data Berhasil Diubah</div>
                       <?php } else if($_GET['notif']=="hapusberhasil"){?>
                             <div class="alert alert-success" role="alert">
                             Data Berhasil Dihapus</div>
                       <?php }?>
                    <?php }?>
              </div>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th width="5%">No</th>
                      <th width="30%">galeri</th>
                      <th width="30%">Kategori Kegiatan</th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $batas = 5;
                      if(!isset($_GET['halaman'])){
                           $posisi = 0;
                           $halaman = 1;
                      }else{
                           $halaman = $_GET['halaman'];
                           $posisi = ($halaman-1) * $batas;
                      }

                      $sql_k = "SELECT `galeri`.`id_galeri`,`galeri`.`galeri`, `kategori_kegiatan`.`kategori_kegiatan` FROM `galeri` INNER JOIN `kategori_kegiatan` ON `galeri`.`id_kategori_kegiatan` = `kategori_kegiatan`.`id_kategori_kegiatan`";
                      $sql_k .= " ORDER BY `galeri` limit $posisi, $batas ";
                      $query_k = mysqli_query($koneksi,$sql_k); 
                      $no = 1;
                      while($data_k = mysqli_fetch_assoc($query_k)){
                         $id_galeri = $data_k['id_galeri'];
                         $galeri = $data_k['galeri'];
                         $kategori_kegiatan = $data_k['kategori_kegiatan'];
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><img src="../galeri/<?php echo $galeri; ?>" class="img-thumbnail" alt="..." style="width: 100%;"></td>
                      <td><?php echo $kategori_kegiatan; ?></td>
                      <td align="center">
                        <a href="detail-galeri&data=<?php echo $id_galeri ?>" class="btn btn-xs btn-info"><i class="fas fa-eye"></i></a>
                        <a href="edit-galeri&data=<?php echo $id_galeri;?>" class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $galeri; ?>?'))window.location.href='galeri&aksi=hapus&data=<?php echo $id_galeri;?>&notif=hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php $no++;}?>
                  </tbody>
                </table>

                <?php 
              //hitung jumlah semua data 
                  $sql_jum = "SELECT * FROM `galeri`"; 
                  if (isset($_GET["katakunci"])){
                    $sql_jum .= " where `galeri` LIKE '%$katakunci_proker%'";
                  } 
                  $sql_jum .= " order by `galeri`";
 
                  $query_jum = mysqli_query($koneksi,$sql_jum);
                  $jum_data = mysqli_num_rows($query_jum);
                  $jum_halaman = ceil($jum_data/$batas);
                ?>

              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <?php 
                if($jum_halaman==0){
                   //tidak ada halaman
                }else if($jum_halaman==1){
                   echo "<li class='page-item'><a class='page-link'>1</a></li>";
                }else{
                   $sebelum = $halaman-1;
                   $setelah = $halaman+1;
                   if($halaman!=1){
                     echo "<li class='page-item'><a class='page-link' 
                     href='galeri&halaman=1'>First</a></li>";
                     echo "<li class='page-item'><a class='page-link' 
                     href='kategori-
                     buku&halaman=$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                         if($i!=$halaman){
                             echo "<li class='page-item'><a class='page-link' 
                            href='galeri&halaman=$i'>$i</a></li>";
                         }else{
                            echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                         }
                      }
                   }
                   if($halaman!=$jum_halaman){
                        echo "<li class='page-item'><a class='page-link' 
                        href='galeri&halaman=$setelah'>»</a></li>";
                        echo "<li class='page-item'><a class='page-link' 
                        href='galeri&halaman=$jum_halaman'>Last</a></li>";
                   }
                              
                }?>
                </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>
    