<?php
require('db_config.php');

// Make sure data is received
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}
if (isset($_POST['username'])) {
    $username = $_POST['username'];
}
if (isset($_POST['dateOfBirth'])) {
    $dateOfBirth = $_POST['dateOfBirth'];
}
if (isset($_POST['phoneNumber'])) {
    $phoneNumber = $_POST['phoneNumber'];
}


// Check if username already exists in database
$fetchUsername = $table->findSql("SELECT username FROM users WHERE username = ?", [$username]);
if (!empty($fetchUsername)) {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'message' => 'Username already taken.'
    ]);
    exit();
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert new user into database
$insertResult = $table->insert('users', [
    'name' => $name,
    'password' => $hashedPassword,
    'username' => $username,
    'date_of_birth' => $dateOfBirth,
    'phone_number' => $phoneNumber,

]);

if ($insertResult) {

   
    setcookie('username', $username, time() + (86400 * 30), "/");
    setcookie('user_id',$pdo->lastInsertId(), time() + (86400 * 30), "/");
    setcookie('phone_number', $phoneNumber, time() + (86400 * 30), "/");
    setcookie('dob', $dateOfBirth, time() + (86400 * 30), "/");
    setcookie('userType', $userType, time() + (86400 * 30), "/");
    header('Content-Type: application/json');
    
        echo json_encode([
            'success' => true,
            'message' => 'user'
        ]);
        exit();
    
        
    }
  
 else {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'message' => 'Error creating user.'
    ]);
    exit();
}
