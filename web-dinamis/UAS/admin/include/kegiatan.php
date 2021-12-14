<?php 

  if((isset($_GET['aksi']))&&(isset($_GET['data']))){
    if($_GET['aksi']=='hapus'){
      $id_kegiatan = $_GET['data'];
      //hapus kategori buku
      $sql_dh = "DELETE from `kegiatan` where `id_kegiatan` = '$id_kegiatan'";
      mysqli_query($koneksi,$sql_dh);
    }
  }

    if(isset($_POST["katakunci"])){
      $katakunci_kegiatan = $_POST["katakunci"];
      $_SESSION['katakunci_kegiatan'] = $katakunci_kegiatan;
    }

    if(isset($_SESSION['katakunci_kegiatan'])){
      $katakunci_kegiatan = $_SESSION['katakunci_kegiatan'];
    }
?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-book-reader"></i> kegiatan</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> kegiatan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  kegiatan</h3>
                <div class="card-tools">
                  <a href="tambah-kegiatan" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah  kegiatan</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="kegiatan">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" id="kata_kunci" name="katakunci" value="<?php if(isset($_GET["katakunci"])){ echo $_GET["katakunci"]; } ?>">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
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
                      <th width="30%">Kegiatan</th>
                      <th width="30%">Tanggal</th>
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

                      $sql_k = "SELECT * FROM `kegiatan` ";
                      if (!empty($katakunci_kegiatan)){
                            $sql_k .= " where `kegiatan` LIKE 
                            '%$katakunci_kegiatan%'";
                      } 
                      $sql_k .= " ORDER BY `tanggal` limit $posisi, $batas ";
                      $query_k = mysqli_query($koneksi,$sql_k); 
                      $no = 1;
                      while($data_k = mysqli_fetch_assoc($query_k)){
                         $id_kegiatan = $data_k['id_kegiatan'];
                         $kegiatan = $data_k['kegiatan'];
                         $tanggal = $data_k['tanggal'];
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $kegiatan; ?></td>
                      <td><?php echo $tanggal; ?></td>
                      <td align="center">
                        <a href="detail-kegiatan&data=<?php echo $id_kegiatan ?>" class="btn btn-xs btn-info"><i class="fas fa-eye"></i></a>
                        <a href="edit-kegiatan&data=<?php echo $id_kegiatan;?>" class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $kegiatan; ?>?'))window.location.href='kegiatan&aksi=hapus&data=<?php echo $id_kegiatan;?>&notif=hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php $no++;}?>
                  </tbody>
                </table>

                <?php 
              //hitung jumlah semua data 
                  $sql_jum = "SELECT * FROM `kegiatan`"; 
                  if (isset($_GET["katakunci"])){
                    $sql_jum .= " where `kegiatan` LIKE '%$katakunci_proker%'";
                  } 
                  $sql_jum .= " order by `kegiatan`";
 
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
                     href='kegiatan&halaman=1'>First</a></li>";
                     echo "<li class='page-item'><a class='page-link' 
                     href='kategori-
                     buku&halaman=$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                         if($i!=$halaman){
                             echo "<li class='page-item'><a class='page-link' 
                            href='kegiatan&halaman=$i'>$i</a></li>";
                         }else{
                            echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                         }
                      }
                   }
                   if($halaman!=$jum_halaman){
                        echo "<li class='page-item'><a class='page-link' 
                        href='kegiatan&halaman=$setelah'>»</a></li>";
                        echo "<li class='page-item'><a class='page-link' 
                        href='kegiatan&halaman=$jum_halaman'>Last</a></li>";
                   }
                              
                }?>
                </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>
    