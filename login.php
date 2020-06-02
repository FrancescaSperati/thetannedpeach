<?php
  require_once('assets/snippets/db.php');


  $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
  if($query = $connect->prepare($sql)){

    $query->bind_param('ss', $email, $password);

    $email = $_POST['email_login'];
    $password = sha1($_POST['password_login']);

    $email = $connect->real_escape_string($email);
    $password = $connect->real_escape_string($password);

    $query->execute();
    $result = $query->get_result();
    $row = $result->num_rows;

    if($row > 0){
      $user = $result->fetch_assoc();
      $_SESSION['fname'] = $user['fname'];
      $_SESSION['user_id'] = $user['user_id'];
      $_SESSION['email'] = $user['email'];
      header("Location: index.php");
    }else {
      echo 'no';
    }
  }
 ?>
