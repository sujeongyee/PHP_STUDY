<?php
include '../include/db.php';

$postNo = $_GET['postNo'];

$sql = "SELECT postNo, postTitle, postWriter, postContent, postDate, postViews FROM POST WHERE postNo = $postNo";
$result = $conn->query($sql);
$post = $result->fetch_assoc();

// Update view count
$updateViewSql = "UPDATE POST SET postViews = postViews + 1 WHERE postNo = $postNo";
$conn->query($updateViewSql);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>게시물 상세보기</title>
  <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
  <link rel="stylesheet" href="/css/board.css">
  <script src="/js/main.js"></script>
  <script src="/js/detailPost.js"></script>
</head>
<body>
  <div id="header"></div>
  <div id="menu"></div>
  <div class="container detail-container">
    <h1 class="detail-title"><?php echo $post['postTitle']; ?></h1>
    <p class="detail-meta">작성자: <?php echo $post['postWriter']; ?> | 작성일: <?php echo $post['postDate']; ?> | 조회수: <?php echo $post['postViews']; ?></p>
    <p class="detail-content"><?php echo nl2br(htmlspecialchars($post['postContent'])); ?></p>
    <div class="detail-actions">
      <button id="list-btn">목록</button>
      <button id="update-btn">수정</button>
      <button id="delete-btn">삭제</button>
    </div>
  </div>
  <div id="footer"></div>

  <script>
    const postId = <?php echo $post['postNo']; ?>;
  </script>
</body>
</html>

<?php
$conn->close();
?>
