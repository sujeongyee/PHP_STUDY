<?php 

// xampp
// 웹서버, DB서버, PHP
// Apache, MySQL, PHP 컴파일러


$txt = "안녕하세요";
$x = 5;
$y = 10.5;
// 대소문자 구분 됨
$X  = 10;

echo "x = $x, x= $X";
echo "<br>";
echo "I love $txt !";
echo "<br>";

// 전역 변수
// 로컬 변수 (지역 변수)

$x = 5;
function myTest(){
  global $x; // 밖에서 선언한 변수를 global로 선언해주면 사용 가능
  // $x = 6; 새로운 변수가 됨
  $x++;
  echo "변수 x의 출력값 $x"; // 6
  echo "<br>";
}
myTest();
echo "변수 x의 출력값 $x"; // 6 위에서 ++해줘서
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>My First PHP Page</h1>
  <?php 
    echo "Hello World!";
  ?>
  
</body>
</html>