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
    <link rel="stylesheet" href="assets/css/about-us.css">    


    <title>Verde - Sustainable Fashion</title>
    <script>
      var user_id = <?php if($logged){ echo $_SESSION['user_id'];} else { echo 9999; }?>;
    </script>
  </head>
  <body>
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
    <!-- Banner image -->
    <section id="banner">
    <img src="assets/images/banner01.jpg">
    </section>
    
   <!-- About us content -->
   <main>
   <div class="main-raised-box">
       <div class="aboutus">
         <!--<h1 style="font-family: 'Cantata One', serif;">About Verde</h1>-->
         <h1>ABOUT VERDE</h1><br>
         <p>Verde means “green” in Italian, as the name implies,  Verde is an e-commerce website that sells fashionable yet sustainable clothing which aims to be our customers’ “sustainable closet”. Our website offers women clothing includes tops, dresses, skirts, pants, jackets, shoes and accessories. We love shopping but we feel guilty, Verde is the solution as the fabrics we use come from eco-friendly resources.<br><br>
         </p>
        
         <h2 style="font-family: 'Cantata One', serif;">#sustainablefashion<br><br></h2>


       <div class="propic">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <img id = "propic1" alt = "" src = "assets/images/about-us/about-us01.jpg">
            </div>
            <div class="col-sm">
              <img id = "propic2" alt = "" src = "assets/images/about-us/about-us02.jpg">
            </div>
            <div class="col-sm">
              <img id = "propic3" alt = "" src = "assets/images/about-us/about-us03.jpg">
            </div>
          </div>
         </div>
        </div>
     
        
        <h2 style="font-family: 'Cantata One', serif;">Interested in collaboration?<br><br></h2>   
        <a href="contact-us.php" class="btn btn-secondary btn-LG">CONTACT US</a>
        
        </div>
    </div>
    </main>


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
    <script src="assets/js/validation.js" type="text/javascript"></script>
    <script src="assets/js/image-hover.js" type="text/javascript"></script>
    <script src="assets/js/search.js" type="text/javascript"></script>
    <script src="assets/js/favorite.js" type="text/javascript"></script>
  </body>
</html>
