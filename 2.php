<?php

echo "";
print "";

echo("");
print("");

// 위 다 동일

echo "<h3>PHP는 재밌다</h3>";
echo "Hello World! <br>";
echo "I'm about to learn PHP! <br>";

$txt1 = "Learn PHP";
$x = 5;
$y = 5;

// . 문자열 붙이기
echo "<h2>".$txt1."</h2>";
echo "<h2>$txt1</h2>";
echo $x + $y; // 10

// var_dump() 데이터 타입 보여줌
$q = 3333;
var_dump($q); // 10int(3333)

$w = 333.5;
var_dump($w); // float(333.5) 

$s = "1111";
var_dump($s); // string(4) "1111"

var_dump("메롱"); // string(6) "메롱" 한글 한자-> 3byte

// strlen() 문자열 bytes 반환
$s_len = strlen("한글이요");
echo $s_len; // 12

echo "<br>";

// str_word_count() 공백 기준 단어수 세기 (한글은 안됨)
echo str_word_count("안녕 하세요 반갑 습니다"); // 0 한글은 안되네
echo str_word_count("hello world hi"); //3

// strrev() 문자열 뒤집는 함수
echo strrev("Hello World");
echo "<br>";

// strpos(문자, 찾을문자) 문자열 인덱스 찾기 
$a = strpos("Hello world","world"); //6
echo $a;

$email = "aaa@gmail.com";

if(strpos($email,"@")<0) echo "없어요";
else echo "있어요";


?>