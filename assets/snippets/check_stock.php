<?php 
    require_once('db.php');

	$item = $_GET['item'];
	$size = $_GET['size'];
	
    $sql_check_stock = "SELECT quantity FROM stock WHERE item_id=$item AND size_id= $size;";
    $result_chk = $connect->query($sql_check_stock);
	
    if($result_chk  === TRUE){
        echo "Record was updated successfully.";
    } 
    else{
        echo "ERROR. could not insert the data. ". mysqli_error($link);
    }
?>
