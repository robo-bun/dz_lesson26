<?php
function validateName($fieldName) {
    return isset($_POST[$fieldName]) && !empty(trim($_POST[$fieldName])) ? $_POST[$fieldName] : false;
}

function validateAge($fieldName) {
    return isset($_POST[$fieldName]) && !empty(trim($_POST[$fieldName])) ? $_POST[$fieldName] : false;
}

function validateEmail($fieldName) {
    return filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL) ? $_POST[$fieldName] : false;
}


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = validateName('name');

    $age = validateAge('age');

    $email = validateEmail('email');


    $errors = [];

    if($name == false) {
        $errors[] = 'Please enter your profile name';
    }

    if($age == false) {
        $errors[] = 'Please enter your age';
    }

    if($email == false) {
        $errors[] = 'Please enter your email';
    }

    if(!empty($errors)) {
        foreach($errors as $error) {
            echo $error . '<br/>';
        }
    }else{
        echo 'Data was successfully sent!';
    }
}

include 'connection.php';