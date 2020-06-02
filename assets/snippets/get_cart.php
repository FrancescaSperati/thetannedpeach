<?php
    require_once('db.php');
    $user_id = $_SESSION['user_id'];
    $sql_getCart = "SELECT COUNT(bag.item_id) AS items, bag.user_id, SUM(item.price) AS total FROM bag 
    INNER JOIN item ON item.item_id = bag.item_id WHERE bag.user_id = $user_id";
    
    $result_getCart = $connect->query($sql_getCart);
    $cart = $result_getCart->fetch_assoc();
?>