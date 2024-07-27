<?php 

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new mysqli($servername, $username, $password);

  if ($conn->connect_error) {
    throw new Exception("연결 실패: " . $conn->connect_error);
  }

  // 데이터베이스 생성
  $sql = "CREATE DATABASE IF NOT EXISTS test";
  if ($conn->query($sql) === FALSE)  {
    throw new Exception("데이터베이스 생성 실패: " . $conn->error);
  }

  // 데이터베이스 선택
  $conn->select_db('test');

  // 테이블 생성 쿼리
  $sql = "CREATE TABLE IF NOT EXISTS post (
      postNo INT AUTO_INCREMENT PRIMARY KEY,
      postTitle VARCHAR(255) NOT NULL,
      postWriter VARCHAR(100) NOT NULL,
      postContent TEXT NOT NULL,
      postDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
      postViews INT DEFAULT 0
  )";

  if ($conn->query($sql) === FALSE)  {
    throw new Exception("테이블 생성 도중 오류 발생" . $conn->error);
  }

  $postTitle = mysqli_real_escape_string($conn, $_POST['post-title']);
  $postWriter = mysqli_real_escape_string($conn, $_POST['post-writer']);
  $postContent = mysqli_real_escape_string($conn, $_POST['post-content']);

  $sql = "INSERT INTO post (postTitle, postWriter, postContent) VALUES ('$postTitle', '$postWriter', '$postContent')";


  if ($conn->query($sql) === FALSE) {
    throw new Exception("DB에 글 등록 중 오류 발생" . $conn->error);
  } else {
    $sql = "SELECT postNo FROM post ORDER BY postDate DESC";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    $postNo = $row['postNo'];
    //연결 종료 
    $conn->close();
    echo "
    <script>
      alert('게시글 등록 완료');
      window.location.href = 'postDetail.php?postNo=$postNo';
    </script>
    ";
     
  }
} catch (Exception $e) {
  echo "
  <script>
    alert('오류가 발생했습니다: " . addslashes($e->getMessage()) . "');
    history.back(); // 또는 history.go(-1);
  </script>
  ";
  // 연결 종료
  $conn->close();
  exit;
}



