<?php 
    require_once('db.php');
    $user_id = $_SESSION['user_id'];
    $item_id = $_GET['item_id'];
    echo $item_id;
    die;
    $sql_deleteItemBag = "DELETE FROM bag WHERE user_id = $user_id AND item_id = $item_id";
    $res_deleteItemBag = $connect->query($sql_deleteItemBag);

    if($res_deleteItemBag  === TRUE){
        echo "Record was deleted successfully.";
    } 
    else{
        echo "ERROR: Could not able to execute $sql. ". mysqli_error($connect);
    }
?>