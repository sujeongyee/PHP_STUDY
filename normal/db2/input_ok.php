<?php

include 'db.php';

$subject = $_POST['subject'];
$content = $_POST['content'];

$date = date("Y-m-d H:i:s");

try {

  // $conn->exec(" CREATE TABLE board(
  //   idx INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  //   subject VARCHAR(255) DEFAULT '' COMMENT '게시물제목',
  //   content TEXT COMMENT '게시물내용',
  //   rdate DATETIME,
  //   PRIMARY KEY(idx));"
  // );

  // $sql = "INSERT INTO board(subject,content,rdate) 
  //         VALUES('{$subject}','{$content}','{$date}')";
  $sql = "INSERT INTO board(subject,content,rdate) 
          VALUES('{$subject}','{$content}',NOW())";
  
  $conn->exec($sql);
  echo "<p>게시물 등록에 성공했습니다.</p>";

  $last_id = $conn->lastInsertId();

  echo "<p>게시물 번호는 {$last_id} 입니다</p>";

  echo "<script>self.location.href='view.php?idx=".$last_id."'</script>";

} catch (PDOException $e) {
  echo $e->getMessage();
}

$conn = null;