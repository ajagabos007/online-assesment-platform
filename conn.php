<?php 

$host = "db4free.net";
$user = "userexamplatform";
$pass = "Pa$$w0rd!";
$db   = "examplatform";
$conn = null;
$newConn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  die('db connection failed');
}

 ?>