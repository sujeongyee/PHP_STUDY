<?php
include '../include/db.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

$postTitle = $conn->real_escape_string($data['title'] ?? '');
$postWriter = $conn->real_escape_string($data['writer'] ?? '');
$postContent = $conn->real_escape_string($data['content'] ?? '');

$sql = "INSERT INTO POST (postTitle, postWriter, postContent) VALUES ('$postTitle', '$postWriter', '$postContent')";

$response = array();
if ($conn->query($sql) === TRUE) {
    $response['success'] = true;
    $response['postNo'] = $conn->insert_id;
} else {
    $response['success'] = false;
    $response['error'] = $conn->error;
}

$conn->close();

echo json_encode($response);

?>
