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
    var user_id = <?php if($logged){ echo $_SESSION['user_id'];} else { echo 9999; }?>;
  </script>
</head>
<body>
    <header class="header">
        <!-- navbar -->
        <?php include('assets/snippets/navbar.php'); ?>
    </header>
    <!-- Fav -->
    <div id="favSidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
        <i class="fal fa-times fa-2x"></i>
      </a>
      <div id="fav_items">
        <h4 class="text-light text-uppercase text-center pb-4 border-bottom"><i class="material-icons">favorite</i> My favorite</h4>
        <div class="pt-4 sidebar"></div>
      </div>
    </div>

    <!-- Bag -->
    <div id="bagSidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeBag()">
        <i class="fal fa-times fa-2x"></i>
      </a>

      <div id="bag_items">
        <h4 class="text-light text-uppercase text-center pb-4 border-bottom"><i class="material-icons">favorite</i> My Bag</h4>
        <div class="pt-4 bagSidebar"></div>
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
                    <p class="h4 text-center text-capitalize m-auto py-3">Your cart</p>
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
                </div>

                <!-- SHIPPING -->
                <div class="col-sm-4 px-5">
                    <p class="h4 text-center text-capitalize m-auto py-3">Billing info</p>
                                                
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
                    <p class="h4 text-center text-capitalize m-auto py-3">Credit card info</p>
                    <form class="form-group" role="form" id="form-payment" method="POST">
                        <button type="button" id="card_checkout" class="btn btn-info w-100 text-uppercase">
                            Confirm order
                        </button>
                        <p class="font-italic text-muted pt-3" style="font-size:12px;">Powered by Stripe</p>            
                    </form>
                </div>
            </div>
        </div>

    </main>

    <!-- Thank you Modal -->
    <div class="modal fade" id="thankYou" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close text-right p-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body text-center">
                    <i class="fal fa-check-circle fa-5x"></i>
                    <h4 class="text-capitalize p-3">Thank you!</h4>
                    <p>
                        Your order was placed successfully.<br>
                        You will receive a confirmation shortly on <?php echo $_SESSION['email']; ?>
                    </p>
                    <strong>Order number: <p class="order_n"></p></strong>
                </div>
                <div class="text-uppercase text-center pt-2 pb-5">
                    <a role="button" href="products.php" class="btn btn-info"><i class="material-icons align-middle">keyboard_arrow_left</i>Keep shopping</a>
                </div>
            </div>
        </div>
    </div>


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
    <script src="assets/js/bag.js" type="text/javascript"></script>
     <!-- Stripe.js v3 for Elements -->
  <script src="https://js.stripe.com/v3/"></script>

    <script>
        var handler = StripeCheckout.configure({
            key: 'pk_test_awPzaPF3gNjUL2vCL1IlEYtF',
            image: '',
            locale: 'auto',
            token: function(token) {
                // You can access the token ID with `token.id`.
                // Get the token ID to your server-side code for use.
                console.log("Token ID: "+token.id);
                thankYou();
            }
        });

        $('#card_checkout').click(function(e) {
            // Open Checkout with further options:
            handler.open({
                name: 'Verde',
                description: 'Your sustainable clothing',
                email: '<?php echo $_SESSION['email']; ?>',
                currency: 'aud',
                amount: (<?php echo $cart['total'];?>)*100
            });
            e.preventDefault();
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

        $("#progress").attr("style","width:66%");

        $("#payment").hide();
        
        $("#address").on("change input",function(){
            $("#progress").attr("style","width:90%");
            $("#payment").slideDown("slow");
        });

        var isToolTipShown = false;

        $('body').on('click', function(e){
            if( !e.target.classList.contains('bag') ){
                $('.bag').tooltip('hide');
                isToolTipShown = false;
            } else {
                if(isToolTipShown){
                    $('.bag').tooltip('hide');
                    isToolTipShown = false;
                } else {
                    $('.bag').tooltip('show');
                    $('.tooltip-inner').css('min-width', '400px');
                    $('.tooltip-inner').css('min-height', '500px');
                    $('.tooltip-inner').css('background-color', '#00000000');
                    $('.tooltip-inner').css('color', '#FFF');
                    $.get("assets/snippets/show_bag.php")
                        .done(function(result){
                        $('.tooltip-inner').html(result);
                        });
                    isToolTipShown = true;
                } 
            }    
        });
        
        
        function thankYou(){
            // Finalize front-end
            
            // Create number for the order of 11 digits
            var order_n = Math.floor((Math.random() * 99999999999) + 1000000000);
            $('.order_n').text(order_n);
            $('#thankYou').modal('show');
            $("#progress").attr("style","width:100%");

            //Process back-end
            //Add record to Purchase
            $.get({
                url: "assets/snippets/add_purchase.php", 
                cache: false, 
                data: { amount: "<?php echo $cart['total'];?>" , tracking: order_n}})
                .done(function(result_add){
                    console.log("Result: "+result_add);
                });
            // Delete order from Bag
            $.get("assets/snippets/delete_bag.php")
                .done(function(result_del){
                    console.log("Result: "+result_del);
                    // Find way to check again for the badge on bag icon
            });
        }
    </script>
</body>
</html>