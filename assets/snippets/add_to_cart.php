<?php 
    require_once('db.php');

    $it_id = $_GET['item'];
	$size_it = $_GET['size'];
	$user_id = $_GET['user'];
	$sql_add_to_bag = "INSERT INTO bag (user_id, item_id, size_id)VALUES ( $user_id , $it_id , $size_it );";
	$result_add=$connect->query($sql_add_to_bag);
	if($result_add  === TRUE){
		echo "SUCCESS. The has being added to the cart.";
	}else{
		echo "ERROR. could not insert the data. ". mysqli_error($link);
	}
   
?>
