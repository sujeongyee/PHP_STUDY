<?php 
// $file = "imsi.txt";


// if(file_exists($file)){
//   $pf = fopen($file,'r');
//   if($pf){
//     $fz = filesize($file);
//     $fr = fread($pf,$fz);
//     if($fr) {
//       echo $fr;
//     }else {
//       echo "파일 읽기에 실패했습니다.";
//     }   
//   }else{
//     echo "파일 열기에 실패했습니다.";
//   }
// }else {
//   echo "존재하지 않는 파일입니다";
// }

$file = "imsi1.txt";

$pf = fopen($file,'w');
fwrite($pf, "Say, Hi~");
fclose($pf);


?>