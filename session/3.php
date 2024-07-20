<?php 

session_start(); // 세션 시작
//session_unset(); // 모든 세션 변수 삭제
unset($_SESSION['ss_age']);
//session_destroy(); // 현재 세션 종료


?>

<a href="2.php">세션 확인</a>