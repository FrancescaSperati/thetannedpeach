<?php
  DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'verde');
  // DEFINE('DB_USERNAME', 'id6816458_verde_clothing');
  // DEFINE('DB_PASSWORD', 'VerdeClothing');
  // DEFINE('DB_HOST', 'localhost');
  // DEFINE('DB_DATABASE', 'id6816458_verde_db');
  $connect = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if ($connect->connect_error)
  {
    die("Connection failed".$connect->connect_error);
  }
 ?>
