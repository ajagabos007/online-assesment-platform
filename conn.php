<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   = "cee_db";
$conn = null;
$newConn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  die('db connection failed');
}

 ?>