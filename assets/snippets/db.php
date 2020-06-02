<?php

  if(getenv('JAWSDB_MARIA_URL')) {
    $url = parse_url(getenv('JAWSDB_MARIA_URL'));
    DEFINE('DB_USERNAME', $url['user']);
    DEFINE('DB_PASSWORD', $url['pass']);
    DEFINE('DB_HOST', $url['host']);
    DEFINE('DB_DATABASE', substr($url["path"], 1));
  } else {
    DEFINE('DB_USERNAME', 'root');
    DEFINE('DB_PASSWORD', 'root');
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_DATABASE', 'verde');
  }

  $connect = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if ($connect->connect_error)
  {
    die("Connection failed".$connect->connect_error);
  }
 ?>
