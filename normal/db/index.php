<?php 
 
// MySQLi OOP
$servername = "localhost";
$username = "root";
$password = "1234";

// $conn = new mysqli($servername, $username, $password);
// $conn2 = mysqli_connect($servername, $username, $password);


// if($conn->connect_error) {
//   echo "DB 연결에 실패했습니다.";
//   exit;
// }

// if(!$conn2) {
//   die("2번째 DB연결에 실패했습니다.");
// }
$dbname="php";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  echo $e->getMessage();
}

//echo "DB 연결에 성공했습니다."

?>