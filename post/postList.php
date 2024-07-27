<?php
include '../include/db.php';

// 페이지 설정
$postsPerPage = 10;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $postsPerPage;
$currentPage = $page;

// 총 게시물 수
$sql2 = "SELECT COUNT(*) AS postCnt FROM POST";
$result2 = $conn->query($sql2);
$postCount = $result2->fetch_assoc()['postCnt'];
$totalPages = ceil($postCount / $postsPerPage);

// 게시물 목록
$sql = "SELECT * FROM POST ORDER BY postDate DESC LIMIT $postsPerPage OFFSET $offset";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>글 목록</title>
  <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
  <link rel="stylesheet" href="/css/board.css">
  <script src="/js/main.js"></script>
  <script src="/js/detailPost.js"></script>
</head>
<body>
  <div id="header"></div>
  <div id="menu"></div>
  <div class="container post-list-container">
    <h1>글 목록</h1>
    <table class="post-list-table">
      <tr>
        <th>제목</th>
        <th>작성자</th>
        <th>작성일</th>
        <th>조회수</th>
      </tr>
      <?php while($row = $result->fetch_assoc()) { ?>
        <tr style="cursor: pointer;" onclick="clickPost(<?php echo $row['postNo']; ?>)">
          <td><?php echo htmlspecialchars($row['postTitle']); ?></a></td>
          <td><?php echo htmlspecialchars($row['postWriter']); ?></td>
          <td><?php echo htmlspecialchars($row['postDate']); ?></td>
          <td><?php echo htmlspecialchars($row['postViews']); ?></td>
        </tr>
      <?php } ?>
    </table>
  </div>
  <?php include './pagination.php'; ?>
  <div id="footer"></div>
</body>
</html>

<?php
$conn->close();
?>
