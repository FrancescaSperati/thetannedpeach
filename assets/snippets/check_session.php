<?php
  session_start();

  if( isset($_SESSION['fname']) )
    {
      if( count($_SESSION['fname']) > 0 )
      {
        $logged = true;
      } else {
        $logged = false;
        $_SESSION['user_id'] = "";
      }
    } else {
      $logged = false;
      $_SESSION['user_id'] = "";
    }
 ?>
