<?php

session_start();

  if( isset($_SESSION['fname']) )
    {
      if( count($_SESSION['fname']) > 0 )
      {
        $logged = true;
      } else {
        $logged = false;
      }
    } else {
      $logged = false;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cantata+One|Roboto|Material+Icons" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-TXfwrfuHVznxCssTxWoPZjhcss/hp38gEOH8UPZG/JcXonvBQ6SlsIF49wUzsGno" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">


    <title>Verde - Sustainable Fashion</title>
  </head>
  <body>
    <?php include('assets/snippets/navbar.php'); ?>
    <!-- Navbar content over -->

    <img src="assets/images/logo/logo_main_white.png" alt="Verde Logo2" class="logo" width="200px">

    <!-- Carousel content -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
         <img class="d-block w-100 img-fluid" src="assets/images/landing/landing01.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 img-fluid" src="assets/images/landing/landing02.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 img-fluid" src="assets/images/landing/landing03.jpg" alt="Third slide">
      </div>
    </div>
    <a href="products.php" class="btn btn-outline-light shop">SHOP NOW</a>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Carousel content over -->
  <!-- Newsletter content -->
  <div class="container-fluid jumbotron mb-0">
    <div class="row">
      <div class="col-12 py-4">
        <div class="text-center">
          <h4 class="text-uppercase">Subscribe to our Newsletter</h6>
          <p class="text-muted">
            Join our newsletter and get news in your inbox every forthnight! <br>We hate spam too, so no worries about this.
          </p>
          <div class="mx-auto w-50 px-5">
            <form action="https://codeanyapp.us19.list-manage.com/subscribe/post?u=b79d60d16651640699cab1935&amp;id=bb9fe757de" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div class="input-group px-5">
                <input type="email" value="" name="EMAIL" class="form-control border-dark border-right-0" id="mce-EMAIL" placeholder="Your Email address" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input type="text" name="b_b79d60d16651640699cab1935_bb9fe757de" tabindex="-1" value="">
                </div>
                <div class="input-group-append">
                  <button type="submit" class="btn btn-outline-light border-left-0 border-dark"> <i class="fa fa-paper-plane text-dark"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Newsletter content over -->
  <?php include('assets/snippets/footer.php'); ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Custom Js -->
    <script src="assets/js/scrollbar.js" type="text/javascript"></script>
    <script src="assets/js/carousel.js" type="text/javascript"></script>
    <script src="assets/js/validation.js" type="text/javascript"></script>
    <script src="assets/js/search.js" type="text/javascript"></script>

  </body>
</html>
