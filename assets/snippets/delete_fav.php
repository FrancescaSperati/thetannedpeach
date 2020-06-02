<?php 
    require_once('db.php');

    $user_id = $_SESSION['user_id'];
    $item_id = $_GET['item_id'];

    $sql_delete_fav = "DELETE FROM favourite WHERE user_id = $user_id AND item_id = $item_id ";
    $result_delete_fav = $connect->query($sql_delete_fav);

    if($result_delete_fav  === TRUE){
        echo "Record was deleted successfully.";
    } 
    else{
        echo "ERROR: Could not able to execute $sql. ". mysqli_error($connect);
    }

?>