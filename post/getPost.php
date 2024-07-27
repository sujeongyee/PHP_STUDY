<?php
include '../include/db.php';

header('Content-Type: application/json');

$postNo = $_GET['postNo'];

$sql = "SELECT postNo, postTitle, postWriter, postContent FROM POST WHERE postNo = $postNo";
$result = $conn->query($sql);

$response = array();
if ($result->num_rows > 0) {
    $response['success'] = true;
    $response['post'] = $result->fetch_assoc();
} else {
    $response['success'] = false;
    $response['error'] = '게시물이 존재하지 않습니다.';
}

$conn->close();
echo json_encode($response);
?>
