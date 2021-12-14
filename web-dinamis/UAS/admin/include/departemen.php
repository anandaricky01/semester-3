<?php 
  if((isset($_GET['aksi']))&&(isset($_GET['data']))){
    if($_GET['aksi']=='hapus'){
      $id_departemen = $_GET['data'];
      //hapus kategori buku
      $sql_dh = "delete from `departemen` 
      where `id_departemen` = '$id_departemen'";
      mysqli_query($koneksi,$sql_dh);
    }
  }

    if(isset($_POST["katakunci"])){
      $katakunci_departemen = $_POST["katakunci"];
      $_SESSION['katakunci_departemen'] = $katakunci_departemen;
    }

    if(isset($_SESSION['katakunci_departemen'])){
      $katakunci_departemen = $_SESSION['katakunci_departemen'];
    }
?>


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-departemen"></i> departemen</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> departemen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  departemen</h3>
                <div class="card-tools">
                  <a href="tambah-departemen" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah  departemen</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="departemen">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" id="kata_kunci" name="katakunci">
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
                      <th width="80%">departemen</th>
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

                      $sql_k = "SELECT * FROM `departemen`";
                      if (!empty($katakunci_departemen)){
                            $katakunci_departemen = $_SESSION["katakunci_departemen"];
                            $sql_k .= " where `departemen` LIKE '%$katakunci_departemen%'";
                      } 
                      $sql_k .= " ORDER BY `departemen` limit $posisi, $batas";
                      $query_k = mysqli_query($koneksi,$sql_k);
                      $no = ++$posisi;
                      while($data_k = mysqli_fetch_assoc($query_k)){
                         $id_departemen = $data_k['id_departemen'];
                         $departemen = $data_k['departemen'];
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $departemen; ?></td>
                      <td align="center">
                        <a href="detail-departemen&data=<?php echo $id_departemen ?>" class="btn btn-xs btn-info"><i class="fas fa-eye"></i></a>
                        <a href="edit-departemen&data=<?php echo $id_departemen ?>" class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $departemen; ?>?'))window.location.href='departemen&aksi=hapus&data=<?php echo $id_departemen;?>&notif=hapusberhasil'"  
                        class="btn btn-xs btn-warning"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php $no++;}?>
                  </tbody>
                </table>
                <?php 
              //hitung jumlah semua data 
                  $sql_jum = "SELECT `id_departemen`,`departemen` FROM `departemen`"; 
                  if (!empty($katakunci_departemen)){
                    $sql_jum .= " WHERE `departemen` LIKE '%$katakunci_departemen%'";
                  } 
                  $sql_jum .= " ORDER BY `departemen`";
 
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
                     href='departemen&halaman=1'>First</a></li>";
                     echo "<li class='page-item'><a class='page-link' 
                     href='departemen&halaman=$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                         if($i!=$halaman){
                             echo "<li class='page-item'><a class='page-link' 
                            href='departemen&halaman=$i'>$i</a></li>";
                         }else{
                            echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                         }
                      }
                   }
                   if($halaman!=$jum_halaman){
                        echo "<li class='page-item'><a class='page-link' 
                        href='departemen&halaman=$setelah'>»</a></li>";
                        echo "<li class='page-item'><a class='page-link' 
                        href='departemen&halaman=$jum_halaman'>Last</a></li>";
                   }
                              
                }?>
                </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>
    