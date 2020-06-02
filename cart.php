<?php 
	require_once('assets/snippets/check_session.php'); 

	require_once('assets/snippets/db.php');

	$user_id = $_SESSION['user_id']; 
	//retriving the bag info to display
	$sql_get_bag = "SELECT bag.bag_id, item.item_id as item_id, image.url , item.name, size.size_id as size,item.price, size.name as size_name from image inner JOIN item on item.item_id = image.item_id INNER JOIN bag ON bag.item_id = item.item_id INNER JOIN size on size.size_id = bag.size_id WHERE bag.user_id= $user_id and image.url LIKE  '%a.%' GROUP by item.item_id, size.size_id";
    $result_bag = $connect->query($sql_get_bag);
?>	

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
    <link rel="stylesheet" href="assets/css/cart.css">	
    <title>Verde - Bag</title>
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
              <li class="breadcrumb-item active">Bag</li>
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
      <div class="card">
		<div class="card-body">
			<h3 class="card-title mt-10 mb-12">Shopping Bag</h3><br>
			<div class="cart-info-container table-responsive">          
			  <table class="table">
				<thead>
				  <tr>		
					<th class="text-center"></th>		  
					<th class="th-description">Product</th>
					<th class="th-description">Size</th>
					<th class="th-description">Price</th>
					<th class="th-description">Qty</th>
					<th class="th-description">Amount</th>
					<th class="text-center"></th>						
				  </tr>
				</thead>
				<tbody>
				<?php if ($result_bag->num_rows > 0) {
					$total_qty=0;
					$total_price=0;
					while($row = $result_bag->fetch_assoc()){
						$sql_check_quantity = "SELECT COUNT(*) as qty FROM bag WHERE user_id = ".$user_id." AND item_id =".$row['item_id']." AND size_id = ".$row['size'];
						$result_qty = $connect->query($sql_check_quantity);						
						$quantity = $result_qty->fetch_assoc();
						echo '<tr id="rowitem-'.$row["bag_id"].'">'.
						'<td class="align-middle">'.
							'<div class="img-container">'.
							  '<img class="item_picture" src="'.$row["url"].'">'.
							'</div>'.
						'</td>'.	
						'<td class="td-name item_name align-middle">'.
							'<a href="product-detail.php?var='.$row["item_id"].'">'.$row["name"].'</a>'.
						'</td>'.
						'<td class="align-middle">'.$row["size_name"].'</td>'.
						'<td class="td-number align-middle">$ '.$row["price"].'</td>'.
						'<td class="td-number align-middle"><span class="cart_qty"> '.$quantity["qty"].
							' </span> <div class="btn-group btn-group-sm"> '.
							  ' <button class="btn btn-round btn-dark" onclick="deleteItem('.$user_id.','.$row['item_id'].','.$row['size'].','.$row["bag_id"].','.$row["price"].')" > <i class="material-icons">remove</i> </button>'.
							  '<button class="btn btn-round btn-dark" onclick="addItem('.$user_id.','.$row['item_id'].','.$row['size'].','.$row["bag_id"].','.$row["price"].')"> <i class="material-icons">add</i> </button>'.
							'</div>'.
						'</td>'.
						'<td class="td-number align-middle"> $ <span class="cart_amount">'.($row["price"]*$quantity["qty"]).
						'</span> </td>'.
						'<td class="td-actions">'.
							'<button type="button" rel="tooltip" onclick="deleteRow('.$user_id.','.$row['item_id'].','.$row['size'].','.$row["bag_id"].')" data-placement="left" title="Remove item" class="btn delete_cart_item_btn">'.
								'<i class="material-icons">close</i>';								
						echo	'</button>'.
						'</td>'.
					'</tr>';	
					$total_qty = $total_qty + $quantity["qty"];
					$total_price= $total_price+ ($row["price"]*$quantity["qty"]);
					}
				}else{ echo "your shopping bag is empty"; }
				?>	
				<tr>
					<td class="td-total align-middle h5">
						Total
					</td>
					<td colspan="3"></td>	
					<td colspan="1" class="h5 align-middle">
						<span class="tot-quantity"> <?php echo $total_qty; ?></span>
					</td>
					<td colspan="1" class="td-price align-middle h5">
						$ <span class="total"><?php echo $total_price; ?></span>
						
					</td>
					<td colspan="2" class="text-right align-middle">
						<button type = "button" onClick="Checkout()"  class="btn-checkout btn btn-dark">CHECKOUT</button>
					</td>
				</tr>
				</tbody>
			  </table>
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
		<script src="assets/js/favorite.js" type="text/javascript"></script>
		<script src="assets/js/bag.js" type="text/javascript"></script>
	
	<script>
		function deleteItem(user,item,size,bag,price) {//elimina 1 elemento
			$.ajax({
				url: 'assets/snippets/delete_it_cart.php',
				type: "GET",
				data: { user:user, item:item, size:size },
				success: function(result) {
					console.log(result);
					//to update the qty for each row
					var initial_qty = $("#rowitem-"+bag).find(".cart_qty").text();
					var final_qty = initial_qty -1;
					var final_prc = final_qty*price;
					//to update the qty of the whole cart
					var ini_tot_qty = $(".tot-quantity").text();
					var ini_tot = $(".total").text();
					if(final_qty<1){ //se devo eliminare la riga
						var fin_tot = ini_tot - (initial_qty*price);
						$(".total").text(fin_tot);
						var fin_tot_qty = ini_tot_qty - 1;
						$(".tot-quantity").text(fin_tot_qty);
						$("#rowitem-"+bag).remove();
					}	
					else{//altrimenti diminuisco la quantita
						var fin_tot_qty = ini_tot_qty - 1;
						$(".tot-quantity").text(fin_tot_qty);
						var fin_tot = ini_tot - price;
						$(".total").text(fin_tot);
						$("#rowitem-"+bag).find(".cart_qty").text(final_qty);	
						$("#rowitem-"+bag).find(".cart_amount").text(final_prc);
					}						
				},
				error: function(err) {
					console.log(err);
			  }
			});
		}
		
		function addItem(user,item,size,bag,price) {
			//to update the qty for each row			
			var initial_qty = $("#rowitem-"+bag).find(".cart_qty").text();
			var final_qty = parseInt(initial_qty )+1;
			var final_prc = final_qty*price;	
			//to update the qty of the whole cart
			var ini_tot_qty = $(".tot-quantity").text();
			var ini_tot = $(".total").text();
			$.ajax({
				url: 'assets/snippets/add_it_cart.php',
				type: "GET",
				data: { user:user, item:item, size:size, final_qty:final_qty },
				success: function(result) {					
					console.log(result);
					if(result[0]=="S"){//success	
						var fin_tot = parseInt(ini_tot) + price;
						$(".total").text(fin_tot);
						var fin_tot_qty = parseInt(ini_tot_qty) + 1;
						$(".tot-quantity").text(fin_tot_qty);
						$("#rowitem-"+bag).find(".cart_qty").text(final_qty);
						$("#rowitem-"+bag).find(".cart_amount").text(final_prc);
					}else if(result[0]=="O"){
						alert("Not enough items on stock.");
					}
				},
				error: function(err) {
					console.log(err);
				}
			});	
		}
		
		function deleteRow(user,item,size,bag) {
			//to update the qty of the whole cart
			var ini_tot_qty = $(".tot-quantity").text();
			var qty_deleted = $("#rowitem-"+bag).find(".cart_qty").text();
			var ini_tot = $(".total").text();
			var tot_deleted = $("#rowitem-"+bag).find(".cart_amount").text();
			$.ajax({
				url: 'assets/snippets/delete_row_cart.php',
				type: "GET",
				data: { user:user,item:item,size:size },
				success: function(result) {
					console.log(result);
					var fin_tot_qty = ini_tot_qty - qty_deleted;

					$(".tot-quantity").text(fin_tot_qty);
					var fin_tot = ini_tot - tot_deleted;
					$(".total").text(fin_tot);
					$("#rowitem-"+bag).remove();					
				},
				error: function(err) {
					console.log(err);
			  }
			});
		}
		
		function Checkout() {
			var user_id = <?php echo $_SESSION['user_id']; ?>;
			var qty = $(".tot-quantity").text();
			var int_qty = parseInt(qty);
			var tot = $(".total").text();
			var int_tot = parseInt(tot);
			//passing data to the checkout page
			window.location.href = "checkout.php?user=" + user_id + "&items=" + int_qty + "&total=" + int_tot;
    }
	</script> 
</body>
</html>
