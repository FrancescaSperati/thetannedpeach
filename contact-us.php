<?php include('assets/snippets/check_session.php'); ?>

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
    <link rel="stylesheet" href="assets/css/contact-us.css">  

    <title>Verde - Sustainable Fashion</title>
    <script>
      var user_id = <?php if($logged){ echo $_SESSION['user_id'];} else { echo 9999; }?>;
    </script>
    
  </head>
  <body>
      
      <!-- Google map content-->
      <div class="map-container"><div id="map"></div></div>
   
      
    <?php include('assets/snippets/navbar.php'); ?>
    <!-- Navbar content over -->
    <div id="favSidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
        <i class="fal fa-times fa-2x"></i>
      </a>

      <div id="fav_items">
        <h4 class="text-light text-uppercase text-center pb-4 border-bottom"><i class="material-icons">favorite</i> My favorite</h4>
        <div class="pt-4 sidebar"></div>
      </div>
    </div>
      
  <!-- Contact us content -->
    <div class="main-raised-box">
        <div class="contact-content">
          <div class="container">
            <h1>CONTACT US</h1><br>
            <div class="row">
              <div class="col-md-6">
                <p class="description">Leave us a message below and our customer service team will get in touch with you as soon as possible.
                  <br>
                  <br>
                </p>
                <form action="submit-form.php" role="form" id="contact-form" method="post">
                  <div class="form-group">
                    <label for="name" class="bmd-label-floating">Your name</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmails" class="bmd-label-floating">Email address</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="phone" class="bmd-label-floating">Phone</label>
                    <input type="text" class="form-control" id="phone">
                  </div>
                  <div class="form-group label-floating">
                    <label class="form-control-label bmd-label-floating" for="message"> Your message</label>
                    <textarea class="form-control" rows="6" id="message"></textarea>
                  </div>
                  <div class="submit text-left">
                    <input type="submit" class="btn btn-secondary btn-LG" value="SUBMIT"> 
                  </div>
                </form>
              </div>
              <div class="col-md-5 ml-auto">
                <div class="info info-horizontal">
                  <div class="icon icon-primary">
                    <i class="material-icons">pin_drop</i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">Our Headquarter</h4>
                    <p> 120 Spencer Street,
                      <br> Melbourne,
                      <br> VIC 3000 <br><br>
                    </p>
                  </div>
                </div>
                <div class="info info-horizontal">
                  <div class="icon icon-primary">
                    <i class="material-icons">phone</i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">Give us a ring</h4>
                    <p> +61 234 567 890
                      <br> Mon - Fri, 9:00-17:00 <br><br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Contact us content over-->





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
    <script src="assets/js/search.js" type="text/javascript"></script>
    <script src="assets/js/validation.js" type="text/javascript"></script>
    <script src="assets/js/image-hover.js" type="text/javascript"></script>
    <script src="assets/js/googlemap.js" type="text/javascript"></script>
    <script src="assets/js/favorite.js" type="text/javascript"></script>
    <script src="assets/js/bag.js" type="text/javascript"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfeX-6GJw9JIo_fWqfLFiYa8hwXcZotwo&callback=initMap"></script>

  </body>
</html>
