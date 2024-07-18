<?php

// str_replace(1,2,s) 문자열 변경 s문자열에서 1을 2로 치환하겠다
$str = "나는 자랑스러운 미국인이다.";
$str1 = str_replace("미국인","한국인",$str);

echo $str1."<br>"; // 나는 자랑스러운 한국인이다.

// is_int() 정수 판별 is_float 실수 판별
$x = 33443;
var_dump(is_int($x));

if(is_float($x)){
  echo "x는 정수";
}else {
  echo "x는 정수가 아님";
}

// is_numeric(); 숫자인지 아닌지 판별
// 문자열로 된 숫자도 숫자라고 나옴 $n = "3" -> 숫자로 판별
$s = "안녕";

if(is_numeric($s)){
  echo "숫자";
}else{
  echo "숫자 x";
}
echo "<br>";

// min() 가장 작은 숫자 찾아줌
echo (min(0,1,2,3,-1));
echo "<br>";
// max() 가장 큰 숫자 찾아줌
echo (max(0,1,2,"3",-1,"11")); // 문자열로 넣어도 해주네..?

?>