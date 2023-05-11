<?php
require_once('db_config.php');
$password = $_POST['password'];
$username = $_POST['username'];
// Validate the request data
if (empty($username) || empty($password)) {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'message' => 'Please enter your username and password.'
    ]);
    exit();
}


$user = $table->findSql("SELECT * from users where username = '$username'");
if(empty($user)){
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'message' => 'Invalid username or password.'
    ]);
    exit();
}

if (password_verify($password, $user[0]['password'])) {
    setcookie('username', $username, time() + (86400 * 30), "/");
    setcookie('name', $name, time() + (86400 * 30), "/");
    setcookie('user_id', $user[0]['id'], time() + (86400 * 30), "/");
    setcookie('phone_number', $user[0]['phone_number'], time() + (86400 * 30), "/");
    setcookie('dob', $user[0]['date_of_birth'], time() + (86400 * 30), "/");


    header('Content-Type: application/json');
    echo json_encode([
        'success' => true
    ]);
    exit();
} else {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'message' => 'Invalid username or password.'
    ]);
    exit();
}
