<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'less27_dz';

$db = new mysqli($serverName, $userName, $password, $dbName);

if ($db->connect_errno) {
    echo 'Failed to connect to database ' . $db->connect_error;
    exit();
}

include 'insert.php';