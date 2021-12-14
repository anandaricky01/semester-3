<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../img/HIMATIF.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin HIMATIF</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="profil" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
          Profil
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-database"></i>
        <p>
          Data Master
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="kategori-kegiatan" 
          class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Kategori Kegiatan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="departemen" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Departemen</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="galeri" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Galeri</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="proker" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Program Kerja
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="kegiatan" class="nav-link">
        <i class="nav-icon fab fa-blogger"></i>
        <p>
          Kegiatan
        </p>
      </a>
    </li>
    <?php 
    if ($_SESSION['level']=="1"){?>
    <li class="nav-item">
      <a href="user" class="nav-link">
        <i class="nav-icon fas fa-user-cog"></i>
        <p>
          Pengaturan User
        </p>
      </a>
    </li>
    <?php }?>
    <li class="nav-item">
      <a href="signout" class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>
          Sign Out
        </p>
      </a>
    </li>
  </ul>
</nav>
</div>
    <!-- /.sidebar -->
  </aside>
