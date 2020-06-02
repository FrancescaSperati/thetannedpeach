<?php 
    require_once('db.php');

    $user = $_GET['user'];
	$item = $_GET['item'];
	$size = $_GET['size'];
	
    $sql_delete_row_from_cart = "DELETE FROM bag WHERE user_id = $user and item_id = $item and size_id = $size";
	
    $result_del = $connect->query($sql_delete_row_from_cart);
	
    if($result_del  === TRUE){
        echo "Records were deleted successfully.";
    } 
    else{
        echo "ERROR. could not delete the items. ". mysqli_error($connect);
    }
?>
