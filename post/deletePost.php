<?php
include '../include/db.php';

$data = json_decode(file_get_contents('php://input'), true);

$postNo = $conn->real_escape_string($data['postNo']);

$sql = "DELETE FROM POST WHERE postNo=$postNo";

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
