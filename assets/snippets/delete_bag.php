<?php
    require_once('db.php');
    $user_id = $_SESSION['user_id'];
    $sql_delBag = "DELETE FROM bag WHERE user_id = $user_id";
    $res_delBag = $connect->query($sql_delBag);
    if($res_delBag  === TRUE){
        echo "Bag was deleted successfully.";
    } 
    else{
        echo "ERROR: Could not able to execute $sql. ". mysqli_error($link);
    }
?>