<?php

$i = 100;

$j = filter_var($i,FILTER_VALIDATE_INT); // 정수 유효성 검사

//echo $j; // 100

if($j) {
  echo $i."는 제대로 된 정수입니다.";
} else {
  echo $i."는 제대로 된 정수가 아닙니다.";
}


?>