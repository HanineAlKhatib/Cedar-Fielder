<?php
require_once('header.php');
$mypostedField = $table->findSql("SELECT * FROM fields where owner_id = '$user_id'");
$myRentedFields = $table->findSql("SELECT fields.*, rent_fields.created_at  FROM fields join rent_fields on rent_fields.field_id = fields.id   where rent_fields.user_id = '$user_id'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile - Sports Field Rentals</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <link rel="stylesheet" href="./css/profile.css" />
</head>



<main class="container mt-5">
  <section id="user-profile" class="row">
    <div id="user-info" class="col-md-8">
      <h1 id="username"><?= $name ?></h1>
      <h2 id="username"><?= $username ?></h2>
      <p id="phone-number" contenteditable><?= $phoneNumber ?></p>
      <button id="edit-credentials" class="btn btn-primary">
        <i class="fas fa-edit"></i> Change Phone Number
      </button>
      <button id="post-field" class="btn btn-success" onclick="window.location.href='./post.php';">
        <i class="fas fa-plus"></i> Post a Field
      </button>
    </div>
  </section>
  <section id="user-fields" class="mt-5">
    <h2>My Posted Fields</h2>
    <div class="field-list" id="most-rented-fields">
      <?php foreach ($mypostedField as $field) : ?>
        <div>
          <a href="field.php?id=<?= $field['id']; ?>" class="field">

            <img src="<?= $field['image_url']; ?>" alt="Field Image" />


            <div class="field-info">
              <h3><?= $field['name']; ?></h3>
              <h4><?= $field['sport_type']; ?></h4>
              <p><?= $field['address']; ?></p>

            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <h2 class="mt-4">Rented Fields</h2>
    <div class="field-list" id="most-rented-fields">
      <?php foreach ($myRentedFields as $field) : ?>
        <div>
          <a href="field.php?id=<?= $field['id']; ?>" class="field">

            <img src="<?= $field['image_url']; ?>" alt="Field Image" />


            <div class="field-info">
              <h3><?= $field['name']; ?></h3>
              <h4><?= $field['sport_type']; ?></h4>
              <p>Rented in<?= $field['created_at']; ?></p>
              <p><?= $field['address']; ?></p>

            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>

<footer class="text-center py-3">
  <p>&copy; 2023 Sports Field Rentals. All rights reserved.</p>
</footer>
<!--SCRIPT-->
<script src="./js/profile.js"></script>

</body>

</html>