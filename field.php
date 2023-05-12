<?php

include('./Backend/db_config.php');
$id = $_GET['id'];

$fields = $table->findSql("Select * from fields where id = '$id'");
$field = $fields[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

  <link rel="stylesheet" href="./css/field.css" />

  <title>Field Detail</title>
</head>

<body>
  <!-- NAVBAR -->
  <div id="navbar-placeholder"></div>


  <!-- FIELD DESCRIPTION -->

  <div class="container field-description">
    <div class="row">
      <div class="col-md-12">
        <img src="https://via.placeholder.com/600x400" alt="Field Image" class="field-image" />
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <h1 class="field-name"><?=$field['name']?></h1>
        <div class="field-details">
          <div class="field-detail">
            <strong>Size:</strong> <?=$field['size']?>
          </div>
          <div class="field-detail"><strong>Sport Type:</strong> <?=$field['sport_tyoe']?></div>
          <div class="field-detail">
            <strong>Location:</strong> <?=$field['address']?>
          </div>
          <div class="field-detail">
            <strong>Indoor/Outdoor:</strong> <?=$field['type']?>
          </div>
          <div class="field-detail">
            <strong>Description:</strong> <?=$field['description']?>
          </div>
          <div class="field-detail">
            <strong>Days Open for Rent:</strong> <?=$field['open_hours']?> Till <?=$field['close_hours']?>
          </div>
          <div class="field-detail">
            <strong>Price Per Hour:</strong> <?=$field['price_hour']?>
          </div>
          <div class="field-detail">
            <strong>Rent Period:</strong> <?=$field['min_rent_hours']?> hours minimum
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <form id="rent-form" class="form">
          <h2 class="form-title">Book this Field</h2>
          <div class="form-group">
            <label for="rent-date" class="form-label">Choose a Date:</label>
            <input type="date" class="form-control" id="rent-date" name="rent-date" required />
          </div>
          <div class="form-group">
            <label for="rent-time" class="form-label">Choose a Time:</label>
            <input type="time" class="form-control" id="rent-time" name="rent-time" required />
          </div>
          <div class="form-group text-center">
            <button class="rent-btn" type="submit">Request Booking</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2023 Sports Field Rentals. All rights reserved.</p>
  </footer>

  <!-- SCRIPT -->

  <script src="./js/field.js"></script>
</body>

</html>