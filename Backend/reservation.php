<?php
require_once 'db_config.php'; // Include your db_config file

$rentDate = $_POST['rent-date'];
$fieldId = $_POST['field_id'];
$rentTime = $_POST['rent-time'];
$minRentHours = $_POST['min-rent-hours'];

// Convert the rent time to a DateTime object
$rentDateTime = DateTime::createFromFormat('H:i', $rentTime);

// Add the minimum rental hours to the rent time
$endDateTime = clone $rentDateTime;
$endDateTime->add(new DateInterval('PT' . $minRentHours . 'H'));

// Format the end time
$endTime = $endDateTime->format('H:i');

try {
    // Create a new Table object using the PDO instance from your db_config file
    
    $result = $table->findSql("SELECT * FROM rent_fields WHERE 
    (start_time <= '$rentTime' AND end_time >= '$endTime') AND
    DATE(created_at) = '$rentDate' AND field_id = '$fieldId'");


    if (count($result) > 0) {
        // Time conflict found

        $response = array(
            'success' => false,
            'message' => 'There is a time conflict with an existing rental.'
          );
    } else {
        $data = array(
            'field_id' => $fieldId,
            'user_id' => $_COOKIE['user_id'],
            'start_time' => $rentTime,
            'end_time' => $endTime,
            'created_at' => date('Y-m-d H:i:s')
        );

        $success = $table->insert('rent_fields', $data);

        if ($success) {
            $response = array(
                'success' => true,
                'message' => 'Booking request successful!'
            );
        } else {
            $response = array(
                'success' => false,
                'message' => 'Failed to create booking request.'
            );
        }
    }

    header('Content-Type: application/json');
    echo json_encode($response);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
