<?php

// print_r($_FILES);

include 'db.php';

// try {
//   $sql = "CREATE TABLE csvmember(
//     cs_idx INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
//     cs_name VARCHAR(30) DEFAULT '',
//     cs_email VARCHAR(50) DEFAULT '',
//     PRIMARY KEY(cs_idx)
//   )";

//   $conn->exec($sql);
//   echo "테이블생성";

// } catch (PDOException $e) {
//   echo $e->getMessage();
// }

$arr = [];
$conn->beginTransaction();
// 경로, r 읽기모드
$file = fopen($_FILES['csv']['tmp_name'],'r');
while(($line = fgetcsv($file)) !== FALSE) { // csv 파일 한줄씩 읽어오기
  //array_push($arr,$line);
  $sql = "INSERT INTO csvmember(cs_name,cs_email) VALUES ('".$line[0]."','".$line[1]."')";
  //echo $sql."<br>";
  try {
    $conn->exec($sql);
  } catch (PDOException $e) {
    echo $e->getMessage();
    exit;
  }
}

echo "엑셀 파일을 db에 업로드 완료";

$conn->commit();

fclose($file);

//print_r($arr);

$conn = null;

