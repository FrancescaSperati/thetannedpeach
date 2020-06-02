<?php
  require_once('assets/snippets/check_session.php');
  require_once('assets/snippets/db.php');
  //retriving cards info
  $sql1 = "SELECT  item.item_id, item.name, item.price, image.url FROM item INNER JOIN image ON image.item_id = item.item_id WHERE image.url LIKE '%01a%' AND is_new = 1";
  $result1 = $connect->query($sql1);
  //only for the images
	$sql2="SELECT  image.url FROM item INNER JOIN image ON image.item_id = item.item_id WHERE image.url LIKE '%01b%' AND is_new = 1";
  $result2 = mysqli_query($connect, $sql2);
 ?>

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
  <link rel="stylesheet" href="assets/css/productsPage.css">
  <title>Verde - Our Products</title>

  <script>
    var user_id = <?php echo $_SESSION['user_id']; ?>;
  </script>

</head>

<body class="parallax">
  <header class="header">
    <!-- navbar -->
   <?php include('assets/snippets/navbar.php'); ?>
    <br>
  </header>
<!-- main -->

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
  <div id="banner">
  <img src="assets/images/banner03.jpg">
</div>

<div class="main-raised-box">
    <div class="container">
      <!-- Product grid -->
      <main>
      <div class="container">

          			<!-- Breadcrumbs -->
                <div id="breadcrumbs" class="py-3 px-2">
                  <ol class="breadcrumb breadcrumb_ mb-0 pl-8">
                    <li class="breadcrumb-item "><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
                  </ol>
          		</div>
          	</div>

      <!-- pagination -->
        <div class="row py-2">
          <div  id="filters" class="col-sm-4">
            <?php include('assets/snippets/filters.php'); ?>
          </div>
          <div class="col-sm-8" >
          <div class="pagination"></div>
            <div class="row m-0 p-0" id="filter_prods">
              <?php include('all_prod.php'); ?>
            </div>
          </div>
        </div>
      </div>
      </main>
<hr>

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
    <!-- Custom Js -->
    <script src="assets/js/scrollbar.js" type="text/javascript"></script>
    <script src="assets/js/carousel.js" type="text/javascript"></script>
    <script src="assets/js/validation.js" type="text/javascript"></script>
    <script src="assets/js/filters.js" type="text/javascript"></script>
    <script src="assets/js/search.js" type="text/javascript"></script>
    <script src="assets/js/favorite.js" type="text/javascript"></script>
    <script src="assets/js/bag.js" type="text/javascript"></script>
    

</body>
</html>