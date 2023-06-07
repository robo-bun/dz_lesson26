<?php
include_once 'connection.php';
include_once 'search.php';

$id = 2;
$stmt = $db->prepare("DELETE FROM user WHERE id = ?");
$stmt->bind_param('i', $id);

if ($stmt->execute()) {
    echo "Entry deleted successfully <br/>";
}else{
    echo "Error while deleting " . $db->error . "<br/>";
}

$db->close();
$stmt->close();