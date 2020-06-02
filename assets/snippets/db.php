<?php

  // Local Development with MAMP
  //DEFINE('DB_USERNAME', 'root');
  //DEFINE('DB_PASSWORD', 'root');
  //DEFINE('DB_HOST', 'localhost');
  //DEFINE('DB_DATABASE', 'verde');
  //$connect = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  // Heroku
  $db_host = getenv('DB_HOST');
  $db_username = getenv('DB_USERNAME');
  $db_password = getenv('DB_PASSWORD');
  $db_database = getenv('DB_DATABASE');
  $connect = new mysqli($db_host, $db_username, $db_password, $db_database);

  if ($connect->connect_error)
  {
    die("Connection failed".$connect->connect_error);
  }
 ?>
