<?php
require_once 'db_config.php'; // Include your db_config file

// Assuming you have established a database connection in your db_config file

// Retrieve the desired rental start and end times from user input
$desiredStartTime = $_POST['start_time']; 
$desiredEndTime = $_POST['end_time']; 

// Retrieve the desired rental date from user input
$desiredDate = $_POST['rental_date']; 
// Combine the desired date and time values into a single DateTime object
$desiredStartDateTime = new DateTime("$desiredDate $desiredStartTime");
$desiredEndDateTime = new DateTime("$desiredDate $desiredEndTime");

// Format the desired date and time strings for the SQL query
$desiredStartTimestamp = $desiredStartDateTime->format('Y-m-d H:i:s');
$desiredEndTimestamp = $desiredEndDateTime->format('Y-m-d H:i:s');

try {
    // Create a new Table object using the PDO instance from your db_config file


    // Query to check for time conflicts
    $query = "SELECT * FROM rent_fields WHERE 
              (start_time <= ? AND end_time >= ?) AND
              DATE(created_at) = ?";

    $params = [$desiredEndTimestamp, $desiredStartTime, $desiredDate];
    $result = $table->findSql($query, $params);

    if (count($result) > 0) {
        // Time conflict found
        echo "There is a time conflict with an existing rental.";
    } else {
        // No time conflict
        echo "No time conflict found. You can proceed with the rental.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection (if necessary)

?>
