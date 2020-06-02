<?php
  require_once('assets/snippets/check_session.php');
  require_once('assets/snippets/db.php');

  // print order
    $user_id = $_SESSION['user_id'];

    //display CURRENT user's order records from table purchase
    $sql_print_order = "SELECT * FROM purchase WHERE user_id = $user_id";
    $result_print_order = mysqli_query($connect, $sql_print_order) or die ("error");

  // print username in header
    $sql_print_username = "SELECT * FROM user WHERE user_id = $user_id";
    $result_print_username = mysqli_query($connect, $sql_print_username) or die ("error");
    if ($result_print_username->num_rows > 0) {
      while($user = $result_print_username->fetch_assoc()){
        $name = $user['fname'];
        $surname = $user['surname'];
        $email = $user['email'];
        $full_address = $user['add_full'];
        $suburb = $user['add_suburb'];
        $state = $user['add_state'];
        $postal = $user['add_postal'];
        $phone = $user['phone'];
      }
    }else {
      echo "NO DATA";
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
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/my-account.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <title>Verde - My Account</title>
    <script>
      var user_id = <?php if($logged){ echo $_SESSION['user_id'];} else { echo 9999; }?>;
    </script>

  </head>
  <body>

    <?php include('assets/snippets/navbar.php'); ?>
    <!-- Navbar content over -->

    <!-- Banner image -->
    <section id="banner">
    <img src="assets/images/banner02.jpg">
    </section>



    <div class="main-raised-box">
        <div class="container">
          <!-- My profile header -->
          <div class="row">
            <div class="col-12">
                <div class="text-center">
                  <img class="avatar-img rounded-circle" src="assets/images/about-us/about-us03.jpg" alt="Avatar">
                </div>
                <div class="name">
                  <h3 class="title text-center text-uppercase"><?php echo $name." ".$surname; ?></h3>
                  <h6 class="text-center text-capitalize"><?php echo $full_address.", ".$suburb."<br/> ".$postal.", ".$state; ?></h6>
                </div>
            </div>
          </div>
  	<hr>

    <div class="row">
      <!--left column-->
      <div class="col-6 px-5">
        <h3 class="p-3 text-center">My Profile</h3>
        <div class="row">
        <div class="form-group col">
          <label class="control-label">First name </label><i class="fal fa-pencil btn btn-outline-secondary border-0 ml-2" id="btn_fname"></i>
          <input class="form-control" type="text" id="fname" value="<?php echo $name;?>">
        </div>
        <div class="form-group col">
          <label class="control-label">Surname </label><i class="fal fa-pencil btn btn-outline-secondary border-0 ml-2" id="btn_sname"></i>
          <input class="form-control" type="text" id="sname" value="<?php echo $surname;?>">
        </div>
      </div>
            <div class="form-group">
              <label class="control-label">Email</label><i class="fal fa-pencil btn btn-outline-secondary border-0 ml-2" id="btn_email"></i>
              <input class="form-control" type="text" id="email" value="<?php echo $email;?>">
            </div>
            <div class="form-group">
              <label class="control-label">Password</label><i class="fal fa-pencil btn btn-outline-secondary border-0 ml-2" id="btn_pwd"></i>
              <input class="form-control" type="password" id="password" value="">
            </div>
            <div class="row">
            <div class="form-group col">
              <label class="control-label">Address</label><i class="fal fa-pencil btn btn-outline-secondary border-0 ml-2" id="btn_address"></i>
              <input class="form-control" type="text" id="address" value="<?php echo $full_address;?>">
            </div>
            <div class="form-group col">
              <label class="control-label">Suburb</label><i class="fal fa-pencil btn btn-outline-secondary border-0 ml-2" id="btn_suburb"></i>
              <input class="form-control" type="text" id="suburb" value="<?php echo $suburb;?>">
            </div>
          </div>
            <div class="row">
            <div class="form-group col">
              <label class="control-label">State</label><i class="fal fa-pencil btn btn-outline-secondary border-0 ml-2" id="btn_state"></i>
              <input class="form-control" type="text" id="state" value="<?php echo $state;?>">
            </div>
            <div class="form-group col">
              <label class="control-label">Postcode</label><i class="fal fa-pencil btn btn-outline-secondary border-0 ml-2" id="btn_postal"></i>
              <input class="form-control" type="text" id="postcode" value="<?php echo $postal;?>">
            </div>
          </div>
            <div class="form-group">
                <div class="py-1">
                  <input type="button" class="btn btn-dark col-12" value="Save Changes" id="save">
                </div>
                  <input type="button" class="btn btn-outline-dark col-12" value="Cancel" id="cancel">
            </div>
          </div>

          <!--right column-->
          <div class="col-6 px-5">
            <h3 class="p-3 text-center">My Orders</h3>
            <?php
              echo"<table class=table col>";
              echo"<tr><td>Order ID</td><td>Amount</td><td>Shipped Date</td><td>Tracking #</td><tr>";
                while($row = mysqli_fetch_assoc($result_print_order)){
                  echo"<tr><td>{$row['purchase_id']}</td><td>A$ ".$row['amount']."</td><td>{$row['shipped_date']}</td><td>#{$row['tracking_number']}</td><tr>";
                }
              echo"</table>";
            ?>


              </div>
          </div>
        </div>
      </div>
    </div>
          </div>
        </div>
      </div>
      <!--section over-->



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
    <script src="assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Custom Js -->
    <script src="assets/js/scrollbar.js" type="text/javascript"></script>
    <script src="assets/js/carousel.js" type="text/javascript"></script>
    <script src="assets/js/validation.js" type="text/javascript"></script>
    <script src="assets/js/filters.js" type="text/javascript"></script>
    <script src="assets/js/search.js" type="text/javascript"></script>
    <script src="assets/js/favorite.js" type="text/javascript"></script>
    <script src="assets/js/bag.js" type="text/javascript"></script>

    <script>
      $(document).ready(function(){
        $('#fname').prop( "disabled", true );
        $('#sname').prop( "disabled", true );
        $('#email').prop( "disabled", true );
        $('#password').prop( "disabled", true );
        $('#address').prop( "disabled", true );
        $('#suburb').prop( "disabled", true );
        $('#state').prop( "disabled", true );
        $('#postcode').prop( "disabled", true );
        $('#save').prop( "disabled", true );
      });

      $('#btn_fname').click(function(){        
        $('#fname').prop('disabled', false);
        $('#save').prop( "disabled", false );
      });
      $('#btn_sname').click(function(){        
        $('#sname').prop('disabled', false);
        $('#save').prop( "disabled", false );
      });
      $('#btn_email').click(function(){        
        $('#email').prop('disabled', false);
        $('#save').prop( "disabled", false );
      });
      $('#btn_pwd').click(function(){        
        $('#password').prop('disabled', false);
        $('#save').prop( "disabled", false );
      });
      $('#btn_address').click(function(){        
        $('#address').prop('disabled', false);
        $('#save').prop( "disabled", false );
      });
      $('#btn_suburb').click(function(){        
        $('#suburb').prop('disabled', false);
        $('#save').prop( "disabled", false );
      });
      $('#btn_state').click(function(){        
        $('#state').prop('disabled', false);
        $('#save').prop( "disabled", false );
      });
      $('#btn_postal').click(function(){        
        $('#postcode').prop('disabled', false);
        $('#save').prop( "disabled", false );
      });

      $('#cancel').click(function(){
        $('#fname').prop( "disabled", true );
        $('#sname').prop( "disabled", true );
        $('#email').prop( "disabled", true );
        $('#password').prop( "disabled", true );
        $('#address').prop( "disabled", true );
        $('#suburb').prop( "disabled", true );
        $('#state').prop( "disabled", true );
        $('#postcode').prop( "disabled", true );
        $('#save').prop( "disabled", true );
      });

      $('#save').click(function(){
        var name = $('#fname').val();
        var sname = $('#sname').val();
        var email = $('#email').val();
        var pwd = $('#password').val();
        var address = $('#address').val();
        var suburb = $('#suburb').val();
        var state = $('#state').val();
        var postcode = $('#postcode').val();

        $.get({
          url: "assets/snippets/update_account.php",
          data: { fname: name, surname: sname, email:email, password: pwd, address: address, suburb: suburb, state: state, postcode: postcode}})
          .done(function(result){
            console.log(result);
            alert("Details updated succesfully.");
          });
      });
    </script>

  </body>
</html>
