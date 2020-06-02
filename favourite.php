<?php
  require_once('assets/snippets/db.php');

  $item_id = $_GET['item_id'];
  $user_id = $_GET['user_id'];
  $sql_count_fav = "SELECT * FROM favourite WHERE item_id = $item_id AND user_id = $user_id";
  $result_count_fav = $connect->query($sql_count_fav);
  if ($result_count_fav->num_rows > 0) {
    echo "It's already in your list";
  }
  else {
    $sql_fav = "INSERT INTO favourite (item_id, user_id) VALUES ($item_id, $user_id)";
    if ($connect->query($sql_fav) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql_fav . "<br>" . $connect->error;
    }
  }
?>
