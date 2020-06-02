<?php
  //session_start();
  //$_SESSION['fname'] = null;
  session_unset();
  session_destroy();
  //header('Location: index.php')
 ?>

<H2>Logout successful. Page reloading...</H2>

<script>
setTimeout( function(){ location.href = "index.php"; }, 1500 );
</script>
