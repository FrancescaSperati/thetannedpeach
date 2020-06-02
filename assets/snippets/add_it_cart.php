<?php 
    require_once('db.php');

    $user = $_GET['user'];
	$item = $_GET['item'];
	$size = $_GET['size'];
	$qty = $_GET['final_qty'];
	
    $sql_check_stock = "SELECT quantity FROM stock WHERE item_id=$item AND size_id= $size;";
    $result_chk = $connect->query($sql_check_stock);
	 
	while($row = $result_chk->fetch_assoc()){
		if($row["quantity"] >= $qty){
			$sql_add_to_bag = "INSERT INTO bag (user_id,item_id,size_id) VALUES ($user,$item,$size);";
			$result_add = $connect->query($sql_add_to_bag);
			if($result_add  === TRUE){
				echo "SUCCESS. The record was updated successfully.";
			} 
			else{
				echo "ERROR. could not insert the data. ". mysqli_error($link);
			}
		}else{
			echo "OUT OF STOCK. could not insert the data. ". mysqli_error($link);
		}
	}
    
	
    
?>
