<?php
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];

$stmt = $db->prepare("INSERT INTO user(name, age, email) VALUES (?, ?, ?)");
$stmt->bind_param('sis',$name, $age, $email);

if ($stmt->execute()) {
    echo "Post created <br/>";
}else{
    echo "Error creating " . $db->error . "<br/>";
}

include 'search.php';