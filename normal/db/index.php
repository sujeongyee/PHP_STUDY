<?php 

// MySQLi OOP
$servername = "localhost";
$username = "php";
$password = "php";

$conn = new mysqli($servername, $username, $password);
$conn2 = mysqli_connect($servername, $username, $password);


if($conn->connect_error) {
  echo "DB 연결에 실패했습니다.";
  exit;
}

if(!$conn2) {
  die("2번째 DB연결에 실패했습니다.");
}

try {
  $conn3  = new PDO("mysql:host=$servername",$username,$password);
} catch (PDOException $e) {
  echo "3번째 DB 연결에 실패했습니다.";
  echo $e->getMessage();
}

echo "DB 연결에 성공했습니다."

?>