<?php

echo date("Y"); // 2024 년도 4자리 표현
echo "<br>";
echo date("y"); // 24 년도 2자리 표현
echo "<br>";
echo date("M"); // JUL 월을 영어로 표현 3자리
echo "<br>";
echo date("m"); // 07 월을 숫자로 표현 2자리
echo "<br>";
echo date("n"); // 7 월을 숫자로 표현 1자리
echo "<br>";
echo date("Y-m-d H:i:s"); //2024-07-20 06:29:12


echo "<br>";
echo date('D'); // Sat 요일을 영어로 표현 3자리
echo "<br>";
echo date('d'); // 20 일을 숫자로 표현 2자리
echo "<br>";
echo date('j'); // 20 일을 숫자로 표현 1자리
echo "<br>";
echo date("N"); // 6 요일을 숫자로 표현 1:월
echo "<br>";

switch(date("N")){
  case 1 : $yoil = "월요일"; break;
  case 2 : $yoil = "화요일"; break;
  case 3 : $yoil = "수요일"; break;
  case 4 : $yoil = "목요일"; break;
  case 5 : $yoil = "금요일"; break;
  case 6 : $yoil = "토요일"; break;
  case 7 : $yoil = "일요일"; break;
}

echo "오늘은 $yoil 입니다";


?>