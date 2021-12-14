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
                    <a class="dropdown-item" href="#">Java</a>
                    <a class="dropdown-item" href="#">PHP</a>
                    <a class="dropdown-item" href="#">HTML</a>
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
        <h1 class="text-white">BLOG</h1>
      </div>
    </section><br><br>
    <section id="blog-list">
      <main role="main" class="container">
        <div class="row">
          <div class="col-md-9 blog-main">
            <div class="blog-post">
              <h2 class="blog-post-title"><a href="#">Cras mattis consectetur purus sit amet fermentum</a></h2>
              <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
              <!--<img src="slideshow/slide-1.jpg" class="img-fluid" alt="Responsive image"><br><br>-->
      
              <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur 
                ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                Posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                <a href="detailblog.php" class="btn btn-primary stretched-link">Continue reading..</a>
              </div><!-- /.blog-post --><br><br>
      
            <div class="blog-post">
              <h2 class="blog-post-title"><a href="#">Cras mattis consectetur purus sit amet fermentum</a></h2>
              <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
              <!--<img src="slideshow/slide-2.jpg" class="img-fluid" alt="Responsive image"><br><br>-->
      
              <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis 
                euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut 
                fermentum massa justo sit amet risus.</p>
              <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit
                 amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
              <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, 
                a pharetra augue.</p>
              <a href="detailblog.php" class="btn btn-primary stretched-link">Continue reading..</a>
            </div><!-- /.blog-post --><br><br>
      
            <div class="blog-post">
              <h2 class="blog-post-title"><a href="#">Etiam porta sem malesuada magna mollis euismod</a></h2>
              <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
      
              <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis 
                euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut 
                fermentum massa justo sit amet risus.</p>
              <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit
                 amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
              <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, 
                a pharetra augue.</p>
              <a href="detailblog.php" class="btn btn-primary stretched-link">Continue reading..</a>
            </div><!-- /.blog-post --><br><br>
      
            <nav class="blog-pagination">
              <a class="btn btn-outline-primary" href="#">Older</a>
              <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </nav>
      
          </div><!-- /.blog-main -->
      
          <aside class="col-md-3 blog-sidebar">
      
            <div class="p-4">
              <h4 class="font-italic">Categories</h4>
              <ol class="list-unstyled mb-0">
                <li><a href="#">Umum</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">Java</a></li>
                <li><a href="#">Database</a></li>
                <li><a href="#">Techno</a></li>
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