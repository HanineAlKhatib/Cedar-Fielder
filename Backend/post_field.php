<?php
require_once('db_config.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $name = $_POST['name'];
  $size = $_POST['size'];
  $sportTypes = $_POST['sportType'];
  $address = $_POST['address'];
  $type = $_POST['type'];
  $description = $_POST['description'];
  $openHours = $_POST['openHours'];
  $closeHours = $_POST['closeHours'];
  $minRentHours = $_POST['minRentHours'];
  $pricePerHours = $_POST['pricePerHours'];
  $image = $_FILES['image'];

  // Additional validation and processing can be done here
  
  // Save the image file
  $imageUrl = saveImage($image);

  // Insert the field data into the database
  $data = array(
    'name' => $name,
    'size' => $size,
    'sport_type' => $sportTypes,
    'address' => $address,
    'type' => $type,
    'description' => $description,
    'open_hours' => $openHours,
    'close_hours' => $closeHours,
    'min_rent_hours' => $minRentHours,
    'price_hour' => $pricePerHours,
    'image_url' => $imageUrl
  );

  $success = $table->insert('fields', $data);

  if ($success) {
    $response = array(
      'success' => true,
      'message' => 'Field posted successfully!'
    );
  } else {
    $response = array(
      'success' => false,
      'message' => 'Failed to post field.'
    );
  }

  // Send the JSON response
  header('Content-Type: application/json');
  echo json_encode($response);
}

// Function to save the uploaded image
function saveImage($image) {
  // Check if the file was uploaded without errors
  if ($image['error'] === UPLOAD_ERR_OK) {
    $tmpName = $image['tmp_name'];
    $fileName = $image['name'];
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $newFileName = uniqid() . '.' . $ext;
    $destination = '../uploads' . $newFileName;

    // Move the uploaded file to the destination folder
    if (move_uploaded_file($tmpName, $destination)) {
      return $destination;
    }
  }

  return '';
}
?>
