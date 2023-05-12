<?php
require_once('db_config.php');

$phoneNumber = $_POST['phoneNumber'];
$userId = $_POST['userId'];

// Update the user's phone number in the database
$query = "UPDATE users SET phone_number = :phoneNumber WHERE id = :userId";
$result = $table->findSql($query, array('phoneNumber' => $phoneNumber, 'userId' => $userId));
ini_set('display_errors', 1);
error_reporting(E_ALL);
$response = array();
if ($result) {
  $response['success'] = true;
  $response['message'] = 'Phone number updated successfully!';
} else {
  $response['success'] = false;
  $response['message'] = 'Failed to update phone number.';
}

header('Content-Type: application/json');
echo json_encode($response);
?>