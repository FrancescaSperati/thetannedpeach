<?php require_once('assets/snippets/check_session.php'); ?>
<!DOCTYPE html>
<html  lang="en">
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
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/checkout.css">
  <title>Verde - Checkout</title>
  <script>
    var user_id = <?php echo $_SESSION['user_id']; ?>;
  </script>
</head>
<body>
    <header class="header">
        <!-- navbar -->
        <?php include('assets/snippets/navbar.php'); ?>
    </header>
    <div id="favSidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
        <i class="fal fa-times fa-2x"></i>
      </a>

      <div id="fav_items">
        <h4 class="text-light text-uppercase text-center pb-4 border-bottom"><i class="material-icons">favorite</i> My favorite</h4>
        <div class="pt-4 sidebar"></div>
      </div>
    </div>
    <main>
        <a href="cart.php"><i class="material-icons align-middle text-dark back" data-toggle="tooltip" data-placement="right" title="Back to cart">arrow_back</i></a>
        <div id="bar">
            <div class="d-flex justify-content-between mb-4">
                <div class="text-uppercase m-auto text-center h4">Order</div>
                <div class="text-uppercase m-auto text-center h4">Shipping</div>
                <div class="text-uppercase m-auto text-center h4">Payment</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" id="progress" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width:33%"></div>
            </div>
        </div>
        <div class="container-fluid w-100 pb-5">
            <div class="row px-4">
                <!-- ORDER -->
                <?php include('assets/snippets/get_cart.php'); ?>
                <div class="col-sm-4 px-5">
                    <p class="h4 text-center text-capitalize m-auto py-5">Your cart</p>
                    <div class="jumbotron w-100 p-auto">
                        <div class="row pt-3">
                            <div class="col p-0 text-left">Items</div>
                            <div class="col p-0 text-right"><?php echo $cart['items']; ?></div>
                        </div>
                        <div class="row py-3">
                            <div class="col-8 p-0 text-capitalize text-left">Australian delivery</div>
                            <div class="col-4 p-0 text-uppercase text-right">Free</div>
                        </div>
                        <div class="row pt-3 border-dark border-top">
                            <div class="col p-0 text-left font-weight-bold h5">Total AUD</div>
                            <div class="col p-0 text-right font-weight-bold h5">$<?php echo $cart['total']; ?></div>
                        </div>
                    </div>  
                    
                    <button type="button" id="guest_checkout" class="btn btn-info w-100 text-uppercase my-2 p-2">
                        Checkout as a guest
                    </button>
                    <button type="button" id="signIn_checkout" class="btn btn-info w-100 text-uppercase my-2 p-2">
                        Sign In for faster checkout
                    </button>               
                </div>

                <!-- SHIPPING -->
                <div class="col-sm-4 px-5">
                    <p class="h4 text-center text-capitalize m-auto py-5">Billing info</p>
                                                
                        <div class="form-group" id="locationField">
                            <label class="text-uppercase h6">Enter your address</label>
                            <input type="text" class="form-control" id="autocomplete" onFocus="geolocate()" type="text" />
                        </div>
                        
                        <form role="form" id="form" method="POST">
                        
                            <div class="form-group">
                                <label class="text-uppercase h6">Full Address</label>
                                <input type="text" class="form-control" id="address" />
                            </div>
                            
                            <div class="form-group">
                                <label class="text-uppercase h6">Suburb</label>
                                <input type="text" class="form-control" id="suburb" />
                            </div>
                            
                            <div class="form-group">
                                <label class="text-uppercase h6">State</label>
                                <input type="text" class="form-control" id="region" />
                            </div>
                            
                            <div class="form-group">
                                <label class="text-uppercase h6">Postal Code</label>
                                <input type="text" class="form-control" id="postal_code" />
                            </div>

                            <div class="form-group">
                                <label class="text-uppercase h6">Country</label>
                                <input type="text" class="form-control" id="country" placeholder="Country" />
                            </div>          
                        </form>
                </div>
                    
                <!-- PAYMENT -->
                <div class="col-sm-4 px-5" id="payment">
                    <p class="h4 text-center text-capitalize m-auto py-5">Credit card info</p>
                    <form class="form-group" role="form" id="form-payment" method="POST">
                        
                        <div class="form-group">
                            <label class="text-uppercase h6">Card Number</label>
                            <input type="text" class="form-control" id="card"/>
                        </div>

                        <div class="form-group">
                            <label class="text-uppercase h6">Card Holder Name</label>
                            <input type="text" class="form-control" id="card_name"/>
                        </div>
                        
                        <div class="form-group">
                            <label class="text-uppercase h6">Expiry Date</label>
                            <input type="text" class="form-control" id="expiry_date"/>
                        </div>

                        <div class="form-group">
                            <label class="text-uppercase h6">cvv</label>
                            <input type="text" class="form-control" id="cvv"/>
                        </div>

                        <button type="button" id="card_checkout" class="btn btn-info w-100 text-uppercase">
                            Confirm order
                        </button>            
                    </form>
                </div>
            </div>
        </div>

    </main>
    <!-- Footer content -->
    <?php include('assets/snippets/footer.php'); ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBa_caBQt5qDAPb2PaeTuxkaLlC4LBPf0&libraries=places&callback=initAutocomplete" async defer></script>    
    <!-- Custom Js -->
    <script src="assets/js/scrollbar.js" type="text/javascript"></script>
    <script src="assets/js/carousel.js" type="text/javascript"></script>
    <script src="assets/js/validation.js" type="text/javascript"></script>
    <script src="assets/js/filters.js" type="text/javascript"></script>
    <script src="assets/js/search.js" type="text/javascript"></script>
    <script src="assets/js/autocomplete.js" type="text/javascript"></script>
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script src="assets/js/favorite.js" type="text/javascript"></script>

    <script>
        var handler = StripeCheckout.configure({
            key: 'pk_test_awPzaPF3gNjUL2vCL1IlEYtF',
            image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
            locale: 'auto',
            token: function(token) {
                // You can access the token ID with `token.id`.
                // Get the token ID to your server-side code for use.
            }
        });

        $('#stripe_checkout').click(function(e) {
            // Open Checkout with further options:
            handler.open({
                name: 'Verde',
                description: 'Your sustainable clothing',
                currency: 'aud',
                zipCode: true,
                amount: 2000
        });
        e.prevendivefault();
        });

        // Close Checkout on page navigation:
        window.addEventListener('popstate', function() {
            handler.close();
        });

        $('.back').hover(function(){
            $('.back').tooltip('show');
        },
        function(){
            $('.back').tooltip('hide');
        });

        if(user_id == null || user_id === ""){
            $("#guest_checkout").attr("disabled", false);
            $("#signIn_checkout").attr("disabled", false);
        }else{
            $("#guest_checkout").attr("disabled", true);
            $("#signIn_checkout").attr("disabled", true);
            $("#progress").attr("style","width:66%");
        }

        $("#payment").hide();
        
        $("#address").on("change input",function(){
            $("#progress").attr("style","width:90%");
            $("#payment").slideDown("slow");
        });

        // TODO: menu needs to stay visibile until user click out
        $('.bag').click(function(){
            $(this).slideDown("slow");
            $(this).tooltip('show');
            $('.tooltip-inner').css('min-width', '400px');
            $('.tooltip-inner').css('min-height', '500px');
            $('.tooltip-inner').css('background-color', '#00000000');
            $('.tooltip-inner').css('color', '#FFF');
            $.get("assets/snippets/show_bag.php")
                .done(function(result){
                $('.tooltip-inner').html(result);
            });
        });

    </script>
</body>
</html>