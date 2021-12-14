<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="home">HIMATIF</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if($_GET['include'] == 'home'){ echo 'active';} ?>" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php if($_GET['include'] == 'profile'){ echo 'active';} ?>" href="profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php if($_GET['include'] == 'departemen'){ echo 'active';} ?>" href="departemen">Departemen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php if($_GET['include'] == 'kegiatan'){ echo 'active';} ?>" href="kegiatan">Kegiatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php if($_GET['include'] == 'galery'){ echo 'active';} ?>" href="galery">Galery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php if($_GET['include'] == 'faq'){ echo 'active';} ?>" href="faq">FAQ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>