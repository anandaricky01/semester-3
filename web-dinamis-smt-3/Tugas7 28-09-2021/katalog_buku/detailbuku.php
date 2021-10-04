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
    <section id="blog-header">
      <div class="container">
        <h1 class="text-white">DETAIL KATALOG</h1>
      </div>
    </section><br><br>
    <section id="katalog-wrapper">
      <main role="main" class="container">
        <div class="row">
          <div class="col-md-9 katalog-detail">
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr>
                  <td width="40%" rowspan="6"><img src="imgbook/books.jpg" class="img-fluid" alt="Books Collection" title="Books"></td>
                  <td colspan="2"><h4>Suspendisse blandit dapibus lacus, a gravida ex euismod ut</h4></td>
                </tr>
                <tr>
                  <td width="17%"><strong>Penulis</strong></td>
                  <td width="43%">Surianto Rustan</td>
                </tr>
                <tr>
                  <td><strong>Penerbit</strong></td>
                  <td>UB Press</td>
                </tr>
                <tr>
                  <td><strong>Tahun Terbit</strong></td>
                  <td>2019</td>
                </tr>
                <tr>
                  <td><strong>Kategori Buku</strong></td>
                  <td>Machine Learning</td>
                </tr>
                <tr>
                  <td><strong>Tag</strong></td>
                  <td><a href="#">Deep Learning</a>, <a href="#">Phyton</a>, <a href="#">Machine Learning</a>, 
                    <a href="#">Deep Learning</a>, <a href="#">Phyton</a>, <a href="#">Machine Learning</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <h5>Sinopsis</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean at dapibus ex. Nullam arcu erat, 
                      vehicula elementum cursus vitae, gravida bibendum purus. Morbi mollis cursus gravida. Sed vel ultricies nunc. 
                      Aenean fringilla sollicitudin nisi nec vulputate. Suspendisse quis justo erat. 
                      Nullam sagittis, augue ut eleifend consectetur, orci augue cursus mauris, in facilisis lectus est sit amet erat. 
                      Suspendisse blandit dapibus lacus, a gravida ex euismod ut. Morbi ac dictum lectus, et vulputate sapien. 
                      Aliquam et enim tincidunt, accumsan sapien id, feugiat mauris. Phasellus at suscipit est.</p>

                    <p>Aliquam lorem nisi, auctor quis vulputate ac, consequat quis mauris. Class aptent taciti sociosqu ad litora 
                      torquent per conubia nostra, per inceptos himenaeos.</p>
                      <ol>
                        <li>Curabitur malesuada vulputate elit, at sodales neque accumsan nec</li>
                        <li>Ut ut est ut nisi dignissim imperdiet id quis sem</li>
                        <li>Nam non vestibulum mauris. Nullam ac suscipit dolor, vitae fermentum nibh</li>
                        <li>Proin vestibulum semper tempor. Donec vitae sagittis lectus, id congue ante</li>
                        <li>Phasellus aliquam augue sit amet imperdiet semper</li>
                        <li>Aenean eu dolor at ipsum commodo ornare a nec felis</li>
                        <li>In sit amet tellus eu elit accumsan consequat quis sed mi</li>
                      </ol>

                    <p>Phasellus sagittis magna ac velit accumsan vehicula. Nunc sodales mi a nisl elementum, ut facilisis tortor vehicula. 
                      Suspendisse tempor leo nunc. Donec laoreet leo sit amet consequat auctor. Sed facilisis tellus nisi, at 
                      ullamcorper lorem rutrum iaculis. Suspendisse potenti. Proin venenatis felis quis nibh ultricies, vitae interdum 
                      ligula consectetur. Nam fermentum nunc ut viverra cursus. Sed ac purus molestie, faucibus dui sed, imperdiet lacus.
                      Mauris elementum vel turpis vel finibus. In id convallis quam, nec mollis nisl. Mauris faucibus finibus ultrices. 
                      Suspendisse eu nulla nibh. Nam nec laoreet erat. Donec mauris nibh, molestie non luctus et, sagittis quis mauris. 
                      Duis at enim ut augue sollicitudin aliquam.</p>
                  </td>
                </tr>
              </table>
            </div><!-- .table-responsive -->

          </div><!-- /.blog-main -->
      
          <aside class="col-md-3 katalog-sidebar">
      
            
           <div class="pl-4 pb-4">
              <h4 class="font-italic">Buku Terkait</h4>
              <ol class="list-unstyled mb-0">
                <li><a href="#">Data Mining</a></li>
                <li><a href="#">Implementasi Neural Network</a></li>
                <li><a href="#">Deep Learning untuk Machine Learning</a></li>
                <li><a href="#">Python untuk Machine Learning</a></li>
              </ol>
            </div>

            <div class="pl-4 pb-4">
              <h4 class="font-italic">Categories</h4>
              <ol class="list-unstyled mb-0">
                <li><a href="#">Umum</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">Java</a></li>
                <li><a href="#">Database</a></li>
                <li><a href="#">Techno</a></li>
            </div>
      
            <div class="p-4">
              <h4 class="font-italic">Tag</h4>
              <ol class="list-unstyled">
                <li><a href="#">PHP</a></li>
                <li><a href="#">MySQL</a></li>
                <li><a href="#">Javascript</a></li>
              </ol>
            </div>
          </aside><!-- /.blog-sidebar -->
      
        </div><!-- /.row -->
      
      </main><!-- /.container -->
    </section><br><br>
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