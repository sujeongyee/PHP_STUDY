<?php

  $filepath = 'a.txt';
  $filesize = filesize($filepath);
  $filename = 'a.txt';

  //헤더 설정
  header("Content-Type: applicatopn/octet-stream");
  //다운로드 되는 파일의 이름을 지정
  header("Content-Disposition: attachment; filename=$filename");
  header("Content-Transfer-Encoding: binary");
  // 파일 사이즈 명시
  header("Content-Length: $filesize"); 

  ob_clean();
  flush(); // 버퍼 비우기
  readfile($filepath); //파일 읽어서 출력하기
?>