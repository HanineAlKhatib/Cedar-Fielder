<?php
require_once('db_config.php');

$phoneNumber = $_POST['phoneNumber'];
$userId = $_POST['userId'];

// Update the user's phone number in the database
$query = "UPDATE users SET phone_number = '$phoneNumber' WHERE id = '$userId' ";
$result = $table->findSql($query);

$response = array();
if ($result) {
    setcookie('phone_number', $phoneNumber, time() + (86400 * 30), '/');
  $response['success'] = true;
  $response['message'] = 'Phone number updated successfully!';
} else {
  $response['success'] = false;
  $response['message'] = 'Failed to update phone number.';
}

header('Content-Type: application/json');
echo json_encode($response);
?>
