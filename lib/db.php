<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "board";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("연결실패 : " . $conn->connect_error);
}
?>