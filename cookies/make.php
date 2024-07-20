<?php

//쿠키 만들기

setcookie("ck_name", "홍길동", time()+240, "/");
setcookie("ck_age", "34세", time()+240, "/");


?>
쿠키가 생성되었습니다. <br>

<a href="cookie.php">쿠키 확인</a>