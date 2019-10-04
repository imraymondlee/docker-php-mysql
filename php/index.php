<?php
  $host = 'db';
  $user = 'useruser';
  $password = 'passpass';
  $db = 'php-db';

  // $con_pdo = new PDO("mysql:host=$host;dbname=$db","$user","$password");

  $conn = new mysqli($host, $user, $password, $db);
  if($conn->connect_error) {
    echo 'connection failed' . $conn->connect_error;
  }
  echo 'Sucessfully connected to MySQL';
?>
