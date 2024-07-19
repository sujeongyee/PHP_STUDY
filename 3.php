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

echo "<br><br>";

// abs() 절대값 -도 정수로
// sqrt() 루트 4 넣으면 2나와요
// round() 반올림
// rand() 난수 , 랜덤값 rand(a,b) a부터 b까지 범위설정
$a = -33;
$b = abs($a);
echo $b;

$c = sqrt(4);
echo "<br>".$c;

$d = -2.75;
echo "<br>".round($d);

$e = rand(1,5);

echo "<br>".$e;

//php에서 상수 (변하지 않는 값) 는 define(변수명,값) 

define("GREETING","안녕하세요");
echo "<br>".GREETING;


/*
PHP 산술연산자
+ -> 더하기
- -> 빼기
* -> 곱하기
/ -> 나누기
** -> 제곱

*/

$a = 5 + 4;
echo $a;

$b = 2 ** 3;
echo "<br>".$b;


//PHP 할당 연산자
$b = 5;
$a = $b;
$b--;
echo "<br>".$a;

$y = 10;
$x = 5;
$x += $y;

echo "<br>".$x;
//비교연산자

$a = 10;
$b = "11";

var_dump($a != $b);

if($a == $b) {
  echo "a와 b는 같다.";
}else {
  echo "a와 b는 다르다.";
}

//증감연산자

$e = 10;
$f = ++$a;



echo '<br>'."e = $e, f = $f";

//논리 연산자

//and, or, xor, &&, ||, i


$x = true;
$y = true;

var_dump($x xor $y); 

// xor 는 같을때는 false 다를때는 false

echo "<br>";

// 문자열 연산자
// . .=

$a = "안녕";
$b = $a . "하세요";

echo $b."<br>";
$a .= "하세요"; // $a + 문자열의 뜻

echo $a; // 안녕하세요

?>