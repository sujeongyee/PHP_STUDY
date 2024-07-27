<?php

include './index.php';


try {
  $sql = "INSERT INTO myguests(firstname, lastname, email)
  VALUES('juyoung', 'CHOI','cjy0701@google.com')";
  $conn->exec($sql);
  echo "<p>insert 성공</p>";
} catch (PDOException $e) {
  echo $e->getMessage();
}

$conn = null ;
