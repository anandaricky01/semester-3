<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">

    <!-- Global CSS-->
    <link rel="stylesheet" href="dist/css/style.css">

    <title>Katalog Buku</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class="navbar-brand" href="#">Katalog Buku</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown07">
                    <a class="dropdown-item" href="daftarbuku.php">Java</a>
                    <a class="dropdown-item" href="daftarbuku.php">PHP</a>
                    <a class="dropdown-item" href="daftarbuku.php">HTML</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Contact Us</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>
    <section id="carousel-item">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="slideshow/slide-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="slideshow/slide-2.jpg"" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="slideshow/slide-3.jpg"" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>
    <section id="notes-item">
        <div class="container">
            <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                  <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img src="images/undraw_book_lover_mkck.png" class="img-fluid mx-auto featurette-image">
                  <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                </div>
            </div>
            <hr class="featurette-divider"> 
        </div>
    </section><!-- #notes-item -->
    
    <section id="product-item" >
        <div class="container">
            <h2>Koleksi Terbaru</h2>
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img src="imgbook/books.jpg" class="img-fluid" alt="Books Collection" title="Books">
                  <div class="card-body bg-warning">
                    <p class="card-text">MENGUASAI CODEIGNITER 4 KASUS MEMBUAT APLIKASI PMB KAMPUS</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                       <a href="detailbuku.php" class="btn btn-primary stretched-link">Detail</a>
                      </div>
                      <small class="text-muted">Lokomedia</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img src="imgbook/books.jpg" class="img-fluid" alt="Books Collection" title="Books">
                  <div class="card-body bg-warning">
                    <p class="card-text">MENGUASAI CODEIGNITER 4 KASUS MEMBUAT APLIKASI PMB KAMPUS</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="detailbuku.php" class="btn btn-primary stretched-link">Detail</a>
                      </div>
                      <small class="text-muted">Lokomedia</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img src="imgbook/books.jpg" class="img-fluid" alt="Books Collection" title="Books">
                  <div class="card-body bg-warning">
                    <p class="card-text">MENGUASAI CODEIGNITER 4 KASUS MEMBUAT APLIKASI PMB KAMPUS</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="detailbuku.php" class="btn btn-primary stretched-link">Detail</a>
                      </div>
                      <small class="text-muted">Lokomedia</small>
                    </div>
                  </div>
                </div>
              </div>
      
              
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img src="imgbook/books.jpg" class="img-fluid" alt="Books Collection" title="Books">
                  <div class="card-body bg-warning">
                    <p class="card-text">MENGUASAI CODEIGNITER 4 KASUS MEMBUAT APLIKASI PMB KAMPUS</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a href="detailbuku.php" class="btn btn-primary stretched-link">Detail</a>
                      </div>
                      <small class="text-muted">Lokomedia</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img src="imgbook/books.jpg" class="img-fluid" alt="Books Collection" title="Books">
                  <div class="card-body bg-warning">
                    <p class="card-text">MENGUASAI CODEIGNITER 4 KASUS MEMBUAT APLIKASI PMB KAMPUS</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a href="detailbuku.php" class="btn btn-primary stretched-link">Detail</a>
                      </div>
                      <small class="text-muted">Lokomedia</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img src="imgbook/books.jpg" class="img-fluid" alt="Books Collection" title="Books">
                  <div class="card-body bg-warning">
                    <p class="card-text">MENGUASAI CODEIGNITER 4 KASUS MEMBUAT APLIKASI PMB KAMPUS</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                         <a href="detailbuku.php" class="btn btn-primary stretched-link">Detail</a>
                      </div>
                      <small class="text-muted">Lokomedia</small>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
    </section><br><br><!-- #product-item -->
    
    <section id="quotes-item" class="bg-light" style="min-height: 80px;padding:40px 0px 0px 0px;">
        <div class="container">
            <blockquote class="blockquote text-center">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
        </div>
    </section><br><br>
    <section id="blog-item" class="mb-4">
        <div class="container">
            <h2>Blog Terbaru</h2><br>
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static bg-light">
                        <strong class="d-inline-block mb-2 text-success">World</strong>
                        <h3 class="mb-0"><a href="detailblog.php">Duis id ante eu lorem accumsan blandit eget in mi</a></h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <!--<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>-->
                        <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="images/blog.jpg" class="img-fluid" title="book title here">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static bg-light">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0"><a href="detailblog.php">Class aptent taciti sociosqu ad litora torquent per conubia nostra</a></h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <!--<p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>-->
                        <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="images/blog.jpg" class="img-fluid" title="book title here">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static bg-light">
                        <strong class="d-inline-block mb-2 text-success">World</strong>
                        <h3 class="mb-0"><a href="detailblog.php">Maecenas id sapien nec diam pellentesque porta eu interdum ante</a></h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <!--<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>-->
                        <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="images/blog.jpg" class="img-fluid" title="book title here">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static bg-light">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0"><a href="detailblog.php">Aenean facilisis suscipit mi, sit amet egestas diam gravida quis.</a></h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <!--<p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>-->
                        <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="images/blog.jpg" class="img-fluid" title="book title here">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <footer class="bg-primary text-dark">
        <div class="container">
          <p class="float-right">
            <a href="#" class="text-white">Back to top</a>
          </p>
          <p>&copy; <b>2021 Vokasi UB.</b> All rights reserved.</p>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>