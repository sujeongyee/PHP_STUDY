여기는 회원전용 페이지입니다.

<?php 

session_start();

if(!isset($_SESSION['ss_id']) or $_SESSION['ss_id']=='') {
  echo "
  <script>
    alert('여기는 회원 전용 페이지입니다. 로그인 후 접근이 가능합니다.');
    self.location.href = 'index.php';
  
  </script>
  ";
  exit;
} else {
  echo $_SESSION['ss_id'].'님 반갑습니다.';
}



?>

<a href="logout.php">로그아웃</a>