<?php
include '../include/db.php';

$data = json_decode(file_get_contents('php://input'), true);

$postNo = $conn->real_escape_string($data['postNo']);
$postTitle = $conn->real_escape_string($data['title']);
$postWriter = $conn->real_escape_string($data['writer']);
$postContent = $conn->real_escape_string($data['content']);

$sql = "UPDATE POST SET postTitle='$postTitle', postWriter='$postWriter', postContent='$postContent' WHERE postNo=$postNo";

$response = array();
if ($conn->query($sql) === TRUE) {
    $response['success'] = true;
} else {
    $response['success'] = false;
    $response['error'] = $conn->error;
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
?>
