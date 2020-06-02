<?php
  require_once('db.php');
  $user_id = $_GET['user_id'];
  $sql_find_fav = "SELECT * FROM favourite WHERE user_id = $user_id";
  $result_find_fav = $connect->query($sql_find_fav);
  if ($result_find_fav->num_rows > 0) {
    while($row_fav = $result_find_fav->fetch_assoc()) {
      $fav[] = $row_fav['item_id'];
    }
    sort($fav);
    echo json_encode($fav);
  }

 ?>
