<?php include('assets/snippets/check_session.php'); ?>


<!DOCTYPE html>
<html  lang="en" dir="ltr">
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
    <link rel="stylesheet" href="assets/css/product-detail.css">
    <title>Verde - Product Details</title>
    <script>
      var user_id = <?php if($logged){ echo $_SESSION['user_id'];} else { echo 9999; }?>;
    </script>
  </head>

  <body>

    <header class="header">
     <?php include('assets/snippets/navbar.php'); ?>
      <br>
      <div class="d-flex align-items-center">

        <div class="ml-10 text-left">
          <!-- Breadcrumbs -->
            <ol class="breadcrumb breadcrumb_ mb-0 pl-8" style=" padding:24px">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="products.php">Products</a></li>
              <li class="breadcrumb-item active">Product details</li>
            </ol>
        </div>
        <div class="pr-0  ml-auto">
          <!-- sorting -->

        </div>
      </div>
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
    <!-- main -->
    <main class="col-sm-10">
      <?php
      //id of the item to display
      require_once('assets/snippets/db.php');
      $it_id = $_GET['var'];
      //retriving cards info
      $sql_detail="SELECT item.name, item.price, item.description, GROUP_CONCAT(DISTINCT image.url SEPARATOR '|') as url, category.name AS cat_name FROM item INNER JOIN image ON image.item_id = item.item_id INNER JOIN category ON category.cat_id = item.cat_id WHERE item.item_id = $it_id AND url LIKE '%.%'";
      $result_detail = $connect->query($sql_detail);
       if ($result_detail->num_rows > 0) {
          $row = $result_detail->fetch_assoc();
       }else{ echo "no result"; }
      ?>

      <div class="row">
        <!-- image -->
        <div class="col-sm-6 mx-auto" >
          <div id="carousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <?php
                $images = explode("|", $row['url']);
                for ( $x = 0; $x < count($images); $x++) {
                  if($x == 0){
                    echo '<li data-target="#carousel" data-slide-to="0" class="active"></li>';
                  }
                  else{
                    echo '<li data-target="#carousel" data-slide-to="'.$x.'"></li>';
                  }
                }
                ?>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <?php
                  $k=0;
                  foreach ($images as $image) {
                    if ( $k==0 ){
                      echo '<div class="carousel-item active">';
                      $k++;
                    }else{
                      echo '<div class="carousel-item">';
                    }
                    echo '<img class=" img-fluid" src="'.$image.'">';
                    echo '</div>';

                  }
                ?>
              </div>
          </div>


        </div>
        <!-- information -->
        <div class="col-sm-6 d-flex ml-auto p-0">
            <div class="text-left col-sm-12">
              <?php
              echo '<h3 class="">'.$row["name"].'</h3>'.
                   '<p class="" >AUD$ '.$row["price"].'</p>';
              ?>
              <br>
              <div class="accordion" id="accordionExample">
                <div class="card border-0  m-0 p-0 w-100 col-sm-12">
                  <div class="card-header p-0 border-1 bg-transparent" id="headingOne">
                    <h5 class="mb-0">
                      <button id="btn-sld" class="d-flex btn btn-link p-0 text-dark btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style=" text-decoration: none;" >
                        <h5 class="ml-0">Description</h5>
                        <span class="ml-auto">
                        <i id="sym2" class="ml-auto material-icons">keyboard_arrow_up</i>
                        <i id="sym1" class="ml-auto material-icons">keyboard_arrow_down</i>
                        </span>
                      </button>
                    </h5>
                  </div>
                  <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <?php
                      echo '<p class="" >'.$row["description"].'</p>';
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="accordion" id="accordionExample">
                <div class="card border-0  m-0 p-0 w-100 col-sm-12">
                  <div class="card-header p-0 border-1 bg-transparent" id="headingOne">
                    <h5 class="mb-0">
                      <button id="btn-sld" class="d-flex btn btn-link p-0 text-dark btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style=" text-decoration: none;" >
                        <h5 class="ml-0">Size</h5>
                        <span class="ml-auto">
                        <i id="sym3" class="ml-auto material-icons">keyboard_arrow_down</i>
                        <i id="sym4" class="ml-auto material-icons">keyboard_arrow_up</i>
                        </span>
                      </button>
                    </h5>
                  </div>
                  <div id="collapseOne" class="collapse card-body" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="row">
                      
						<?php
						// item : $it_id
						$sizes = array("6", "8", "10", "12", "14", "16");
						$count_rows=0;
						foreach ($sizes as $size) {
							//get the quantity for each size
							$sql_getquantity_by_size = "SELECT quantity, stock.size_id  FROM stock INNER JOIN size ON stock.size_id = size.size_id WHERE size.name = $size AND stock.item_id = $it_id ";
							$result = $connect->query($sql_getquantity_by_size);
							//if there is at least one item in stock, it will display the size, to be chosen by the user
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()){
								    $quantity = $row['quantity'];
								    if($quantity>0){
										if($count_rows==0){
											echo '<div class="size_ col-sm-2">'.$size.'<input class="m-2" type="radio" name="size_item" value="'.$row["size_id"].'"  checked ></div>';
											$count_rows++;
										}else	
											echo '<div class="size_ col-sm-2">'.$size.'<input class="m-2" type="radio" name="size_item" value="'.$row["size_id"].'"></div>';
								    }
								}
							}else {
								echo "0";
							}
						}?>
					  					  
                    </div>
                  </div>
                </div>
              </div>

              <br>
              <div class="accordion" id="accordionExample">
                <div class="card border-0 m-0 p-0 w-100 col-sm-12">
                  <div class="card-header p-0 border-1 bg-transparent" id="headingOne">
                    <h5 class="mb-0">
                      <button id="btn-sld" class="d-flex btn btn-link p-0 text-dark btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style=" text-decoration: none;" >
                        <h5 class="ml-0">Estimated arrival</h5>
                        <span class="ml-auto">
                        <i id="sym5" class="ml-auto material-icons">keyboard_arrow_down</i>
                        <i id="sym6" class="ml-auto material-icons">keyboard_arrow_up</i>
                        </span>
                      </button>
                    </h5>
                  </div>
                  <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      Express Delivery within 3-4 business days
                    </div>
                  </div>
                </div>
              </div>
              <br>
                <button type = "button" onClick="AddToBag()"  class="btn-add-bag btn-lg btn-dark col-sm-10">
                  <i class="fa fa-shopping-bag mr-3"></i> ADD TO BAG</button>
            </div>

        </div>
      </div>

    </main>

<!-- Footer -->

    <!-- Newsletter content over -->
    <?php include('assets/snippets/footer.php'); ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Custom Js -->
    <script src="assets/js/scrollbar.js" type="text/javascript"></script>
    <script src="assets/js/validation.js" type="text/javascript"></script>
    <script src="assets/js/product-detail.js" type="text/javascript"></script>
    <script src="assets/js/favorite.js" type="text/javascript"></script>
    <script src="assets/js/bag.js" type="text/javascript"></script>

     <script>
	 
        function AddToBag(){
			//get the size from radio button and select the relative id from size table, and store it into $size_id 
			var size = document.querySelector('input[name=size_item]:checked').value;
			var user = <?php echo $_SESSION['user_id']; ?>;
			var item = <?php echo $it_id ?>;
			$.ajax({
				url: 'assets/snippets/add_to_cart.php',
				type: "GET",
				data: { user:user, item:item, size:size},
				success: function(result) {					
					console.log(result);					
				},
				error: function(err) {
					console.log(err);
				}
			});			
			//passing data to the cart page
			window.location.href = "cart.php";
        }
      </script>




</body>
</html>
