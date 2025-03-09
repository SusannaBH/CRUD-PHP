<?php
  $host = getenv('MYSQL_HOST');
  $db   = getenv('MYSQL_DATABASE');
  $user = getenv('MYSQL_USER');
  $pass = getenv('MYSQL_PASSWORD');

  try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      die("Error de conexión (BBDD): " . $e->getMessage());
  }
?>