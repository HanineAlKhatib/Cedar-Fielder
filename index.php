<?php
require_once('header.php');

$latestFields = $table->findSql("Select * from fields order by created_at desc");
$mostRentedFields = $table->findSql("
    SELECT f.*, COUNT(r.id) AS rentCount
    FROM fields AS f
    LEFT JOIN rent_fields AS r ON f.id = r.field_id
    GROUP BY f.id
    Order by rentCount desc
");


echo '<script>';
echo "const latestFields = $latestFields;";
echo "const mostRentedFields = $mostRentedFields;";
echo '</script>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="style" href="
    <link rel=" preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

  <link rel="stylesheet" href="./css/index.css" />
  <title>Welcome To Cedar Fielder</title>
</head>

<body class="homepage">
  <!--SLIDER-->
  <div class="slider-container">
    <div class="slider-item active">
      <img src="images/field.jfif" alt="Slider Image 1" />
      <div class="slider-text">
        <h2>Rent a Sports Field</h2>
        <p>Book your favorite sports field with ease and convenience.</p>
      </div>
    </div>
    <div class="slider-item">
      <img src="images/field.jfif" alt="Slider Image 2" />
      <div class="slider-text">
        <h2>Post a Field to Rent Out</h2>
        <p>
          Get the word out about your sports field and start making money.
        </p>
      </div>
    </div>
    <div class="slider-item">
      <img src="images/field.jfif" alt="Slider Image 3" />
      <div class="slider-text">
        <h2>Book Fields</h2>
        <p>
          Look for fields on CF and book them the time you prefer.

        </p>
      </div>
    </div>
    <div class="slider-nav">
      <button class="slider-nav-item active" onclick="changeSlide(1)"></button>
      <button class="slider-nav-item" onclick="changeSlide(2)"></button>
      <button class="slider-nav-item" onclick="changeSlide(3)"></button>
    </div>
  </div>
  <!--END OF SLIDER-->

  <!--MAIN-->
  <main>


    <h1>Welcome to Cedar Fielder!</h1>
    <section id="lately-posted">
      <h3>Lately Posted Fields</h3>
      <div class="field-list" id="lately-posted-fields">
        <?php foreach ($latestFields as $field) : ?>

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
    </section>

    <section id="most-rented">
      <h3>Most Rented Fields</h3>
      <div class="field-list" id="most-rented-fields">
        <?php foreach ($mostRentedFields as $field) : ?>
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
    </section>
  </main>
  <!--END OF MAIN-->
  <footer>
    <p>&copy; 2023 Sports Field Rentals. All rights reserved.</p>
  </footer>
  <!--SCRIPT-->
  <script src="./js/index.js"></script>

</body>

</html>