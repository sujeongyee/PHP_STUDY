<?php
header('Content-Type: application/json');
require 'db.php';

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));

switch ($method) {
    case 'GET':
        if(isset($request[1])) {
            $postNo = intval($request[1]);
            getPost($postNo);
        } else {
            getPosts();
        }
        break;
    case 'POST':
        createPost();
        break;
    case 'PUT':
        $postNo = intval($request[1]);
        updatePost($postNo);
        break;
    case 'DELETE':
        $postNo = intval($request[1]);
        deletePost($postNo);
        break;
    default:
        echo json_encode(['message' => 'Invalid request']);
        break;
}

function getPosts() {
    global $conn;
    $sql = "SELECT * FROM post";
    $result = $conn->query($sql);
    $posts = [];
    while($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
    echo json_encode($posts);
}

function getPost($postNo) {
    global $conn;
    $sql = "SELECT * FROM post WHERE postNo = $postNo";
    $result = $conn->query($sql);
    if($row = $result->fetch_assoc()) {
        echo json_encode($row);
    } else {
        echo json_encode(['message' => 'Post not found']);
    }
}

function createPost() {
    global $conn;
    $data = json_decode(file_get_contents('php://input'), true);
    $title = $data['postTitle'];
    $writer = $data['postWriter'];
    $content = $data['postContent'];
    $sql = "INSERT INTO posts (postTitle, postWriter, postContent) VALUES ('$title', '$writer', '$content')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['message' => 'Post created successfully']);
    } else {
        echo json_encode(['message' => 'Error creating post: ' . $conn->error]);
    }
}

function updatePost($postNo) {
    global $conn;
    $data = json_decode(file_get_contents('php://input'), true);
    $title = $data['postTitle'];
    $writer = $data['postWriter'];
    $content = $data['postContent'];
    $sql = "UPDATE posts SET postTitle='$title', postWriter='$writer', postContent='$content' WHERE postNo=$postNo";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['message' => 'Post updated successfully']);
    } else {
        echo json_encode(['message' => 'Error updating post: ' . $conn->error]);
    }
}

function deletePost($postNo) {
    global $conn;
    $sql = "DELETE FROM posts WHERE postNo=$postNo";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['message' => 'Post deleted successfully']);
    } else {
        echo json_encode(['message' => 'Error deleting post: ' . $conn->error]);
    }
}
?>
