<?php

$servername = "localhost";
$username = "php";
$password = "php";
$dbname = "php";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "db연결 성공";
} catch (PDOException $e) {
  echo $e->getMessage();
}