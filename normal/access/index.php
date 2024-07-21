<?php 

function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor ; 
}

try {
  echo divide(5,0);
} catch (Exception $e) {
  $code = $e -> getCode();
  $message = $e -> getMessage();
  $file = $e -> getFile();
  $Line = $e -> getLine();
  echo "Exception thrown in $file on line $Line : [Code $code] $message";
  //Exception thrown in C:\xampp\htdocs\normal\access\index.php on line 5 : [Code 0] Division by zero프로그램을 종료합니다.
  //echo "Unable to divide";
} finally { // 언제나 실행되는
  echo "프로그램을 종료합니다.";
}



?>