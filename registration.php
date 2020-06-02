<?php
  session_start();
  require_once('assets/snippets/db.php');

  header("Content-Type: text/plain");

  //before inserting data in the db check if user has already register with that email
  $sql_check = "SELECT * FROM user WHERE email = ?";
  if($query_check = $connect->prepare($sql_check)){
    //get params from the form
    $fname = $_POST['fname'];
    $email = $_POST['email_reg'];
    $password = sha1($_POST['password_reg']);

    //clean strings for security
    $fname = $connect->real_escape_string($fname);
    $email = $connect->real_escape_string($email);
    $password_reg = $connect->real_escape_string($password_reg);

    //execute the query and extract results
    $query_check->bind_param("s", $email);
    $query_check->execute();
    $result_check = $query_check->get_result();
    $row = $result_check->num_rows;

    //if already registered block the process otherwise insert data in the db
    if($row > 0){
      //header("Location: index.php");
      echo 'User already registered';
    }else {
      $sql_insert = "INSERT INTO user (fname, email, password) VALUES(?,?,?)";
      if($query_insert = $connect->prepare($sql_insert)){
        $query_insert->bind_param("sss", $fname, $email, $password);
        $query_insert->execute();
        $_SESSION['fname'] = $fname;
        //$_SESSION['user_id'] = $user['user_id'];
        header("Location: index.php");
      }else {
        echo 'Something is wrong';
      }
    }
  }
 ?>
