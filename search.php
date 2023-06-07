<?php
include_once 'connection.php';
include_once 'insert.php';

$stmt = $db->prepare("SELECT id, name, age, email FROM user");
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo 'ID: ' . $row['id'] . '. Name: ' . $row['name'] . '. Age: ' . $row['age'] . ', Email: ' . $row['email'] . "<br/>";
}

$id = 8;
$name = 'Никита';
$age = 20;
$email = 'nik@gmail.com';

$stmt = $db->prepare("UPDATE user SET name = ?, age = ?, email = ? WHERE id = ?");
$stmt->bind_param('sisi',$name, $age, $email, $id);

if ($stmt->execute()) {
    echo "Post updated <br/>";
}else{
    echo "Error while updating " . $db->error . "<br/>";
}

include 'delete.php';