<?php 
    require_once('db.php');

    $user = $_GET['user'];
	$item = $_GET['item'];
	$size = $_GET['size'];
	
	$sql_delete_from_bag = "DELETE FROM bag WHERE user_id = $user and item_id = $item and size_id = $size LIMIT 1 ";
	
    $result_del = $connect->query($sql_delete_from_bag);
	
    if($result_del  === TRUE){
        echo "Record was deleted successfully.";
    } 
    else{
        echo "ERROR. could not delete the item. ". mysqli_error($connect);
    }
?>
