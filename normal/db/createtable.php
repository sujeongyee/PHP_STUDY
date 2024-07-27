<?php

$servername = "localhost";
$username = "root";
$password = "1234";

// DB연결
try {
  $conn = new PDO("mysql:host-$servername",$username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<p>Database 에 연결했습니다.</p>";
} catch (PDOException $e) {
  echo $e->getMessage();
  exit();
}

// 테이블생성
try {
  $use = "USE PHP";
  $conn->exec($use);

  echo "<p>php 테이블을 선택</p>";

  $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

  $conn->exec($sql);
  echo "<p>테이블이 생성되었습니다</p>";
} catch (PDOException $e) {
  echo $e->getMessage();
}
$conn = null;