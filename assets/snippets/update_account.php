<?php
    require_once('db.php');

    $user_id = $_SESSION['user_id'];
    $name = $_GET['fname'];
    $sname = $_GET['surname'];
    $email = $_GET['email'];
    $address = $_GET['address'];
    $suburb = $_GET['suburb'];
    $state = $_GET['state'];
    $postcode = $_GET['postcode'];

    if($_GET['password'] === null || $_GET['password'] === ""){
        $sql_update = "UPDATE `user` SET `fname`=?, `surname`=?, `email`=?, `add_full`=?, `add_suburb`=?, `add_state`=?, `add_postal`=? WHERE user_id=$user_id";
        if($stmt_update = $connect->prepare($sql_update)){
            $stmt_update->bind_param("sssssss", $name, $sname , $email , $address , $suburb , $state , $postcode);
        }
    }else{
        $pwd = sha1($_GET['password']);
        $sql_update = "UPDATE `user` SET `fname`=?, `surname`=?, `email`=?, `password`=? , `add_full`=?, `add_suburb`=?, `add_state`=?, `add_postal`=? WHERE user_id=$user_id";
        if($stmt_update = $connect->prepare($sql_update)){
            $stmt_update->bind_param("ssssssss", $name, $sname , $email , $password, $address , $suburb , $state , $postcode);
        }
    }
    
    if ($stmt_update->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $connect->error;
    }
?>