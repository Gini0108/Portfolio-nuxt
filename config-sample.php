<?php
  $host = 'HOST';
  $db   = 'DATABASE';
  $user = 'USERNAME';
  $pass = 'PASSWORD';
  $charset = 'utf8mb4';

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
  $conn = new PDO($dsn, $user, $pass, $options);
?>
