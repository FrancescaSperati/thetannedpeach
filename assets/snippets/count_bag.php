<?php
    require_once('db.php');

    $user_id = $_SESSION['user_id'];
    $sql_countBag = "SELECT COUNT(*) as tot FROM bag WHERE user_id=?";

    if($stmt_countBag = $connect->prepare($sql_countBag)){
        //execute the query and extract results
        $stmt_countBag->bind_param("i", $user_id);
        $stmt_countBag->execute();
        $res_countBag = $stmt_countBag->get_result();
        
        $count = $res_countBag->fetch_assoc();
        echo $count['tot'];
    }
?>