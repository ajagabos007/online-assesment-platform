<?php 

$host = "sql8.freesqldatabase.com";
$user = "sql8569229";
$pass = "LNyrI179bq";
$db   = "sql8569229";
$conn = null;
$newConn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  die('db connection failed');
}

 ?>