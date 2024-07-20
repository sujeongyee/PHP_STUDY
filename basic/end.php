<?php

// explode() 함수 지정된 문자로 문자열을 잘라서 배열을 만들게 도와줌

$str = "a,b,c,d";

$arr = explode(',',$str);

print_R($arr);

$str2 = implode(', ',$arr);

echo "<br>$str2";


// end() 함수
// 배열의 마지막 값을 리턴, 구해줍니다.
echo end($arr);

// 파일의 확장자 구하기
$file_name = "aaa.jpg";
$arr = explode(".",$file_name);
echo end($arr);

// 확장자 구하는 함수 만들기
function getFileExt($file_name) {
  $arr = explode(".",$file_name);
  return end($arr);
}
// 호출하기
$fname = "나쵸.txt";
$ext = getFileExt($fname);

echo "<br>$ext";


//count 함수 써서 확장자 구하기
$file_name = "aaa.bbbb.jpg";
$arr = explode(".",$file_name);
$arr_len = count($arr)-1;
echo "<br>$arr[$arr_len]";

function getFileExt2($file_name) {
  $arr = explode(".",$file_name);
  $arr_len = count($arr)-1;
  return $arr[$arr_len];
}
echo getFileExt2("dfsdfs.dfsdff.vdvv.z");

?>