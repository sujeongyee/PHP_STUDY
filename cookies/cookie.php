<?php

if(isset($_COOKIE['ck_name'])){
  echo '이름은 : '. $_COOKIE['ck_name'].' 입니다.';
}else {
  echo '이름 몰라요!';
}
echo "<br>";
if(isset($_COOKIE['ck_age'])){
  echo '나이는 : '. $_COOKIE['ck_age'].' 입니다.';
}else {
  echo '나이 몰라요!';
}

?>

<a href="delete.php">쿠키 지우기</a>