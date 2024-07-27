<?php 

include 'db.php';

$stmt = $conn->prepare("INSERT INTO myguests (firstname,lastname,email) 
                        VALUES (:firstname,:lastname,:email)");

$stmt->bindParam(':firstname',$firstname);
$stmt->bindParam(':lastname',$lastname);
$stmt->bindParam(':email',$email);


$firstname = "Julie";
$lastname = "Dooley";
$email = "jolie@example.com";

$stmt->execute();

echo "값 들어감";

$conn = null;