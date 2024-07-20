<?php

//print_r($_SERVER);

//echo $_SERVER['PHP_SELF'];

// $ag = $_SERVER['HTTP_USER_AGENT'];
// echo $ag;
// if(strpos($ag,'Chrome')){
//   echo '크롬 유저시군요';
// } else {
//   echo '크롬 유저가 아니시군요';
// }

// echo $_SERVER['REMOTE_ADDR'];

// echo "<br>";

// print_r($_GET);

// echo '제 이름은요 '.$_GET['name'].' 이구요<br>';
// echo '제 회사는 '.$_GET['company'].' 입니다';

// print_r($_POST);


echo "<h1>POST</h1>";
print_r($_POST);

echo "<h1>GET</h1>";
print_r($_GET);


?>

<!-- <a href = "<?= $_SERVER['PHP_SELF'];?>?a=b">b값을 가져오기</a> -->