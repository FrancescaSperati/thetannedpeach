<?php
  require_once('db.php');
  if( isset($_SESSION['user_id']) )
  {
    if( count($_SESSION['user_id']) > 0 )
    {
      $user = $_SESSION['user_id'];
      $sql = "SELECT COUNT(*) as fav FROM favourite WHERE user_id = $user";

      $result = $connect->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
        {
          echo $row['fav'];
        }
      }
    }
  }

?>
