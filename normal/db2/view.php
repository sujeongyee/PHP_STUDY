<?php

include 'db.php';

$idx = $_GET['idx'];

try {
  $sql = "SELECT * FROM board where idx = {$idx}";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  // echo "<pre>";
  // print_R($row);

  // echo "</pre>";


} catch (PDOException $e) {
  echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?php echo $row['subject'];  ?> </title>
</head>
<body>
  <p>제목 : <?php echo $row['subject']; ?></p>
  <p><?php echo nl2br($row['content']); ?></p> <!-- 개행 문자 표시 nl2br -->
</body>
</html>
