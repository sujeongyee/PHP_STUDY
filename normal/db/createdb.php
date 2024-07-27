<?php
$servername = "localhost";
$username = "root";
$password = "1234";

try {
  $conn = new PDO("mysql:host-$servername",$username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "<p>Database 에 연결했습니다.</p>";
} catch(PDOException $e) {
  echo $e->getMessage();
}

try {
  // $sql = "CREATE DATABASE firstdb";
  $sql = "DROP DATABASE firstdb";
  $conn->exec($sql);
  echo "<p>firstdb 가 삭제되었습니다.</p>";
} catch(PDOException $e) {
  echo $e->getMessage();
}

$conn=null;

