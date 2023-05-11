
<?php
require_once('header/header.php');

$fields = $table->findSql("Select * from ")
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="style" href="
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />

    <link rel="stylesheet" href="homepage.css" />
    <title>Welcome To Cedar Fielder</title>
  </head>
  <body class="homepage">
    <!--NAVBAR-->
    <div id="navbar-placeholder">
      
    </div>


    <!--END OF NAVBAR-->
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
          <h2>Post a Field to Sell or Rent</h2>
          <p>
            Get the word out about your sports field and start making money.
          </p>
        </div>
      </div>
      <div class="slider-item">
        <img src="images/field.jfif" alt="Slider Image 3" />
        <div class="slider-text">
          <h2>Manage Your Postings as You Wish</h2>
          <p>
            Keep track of your sports field postings and edit or delete them as
            needed.
          </p>
        </div>
      </div>
      <div class="slider-nav">
        <button
          class="slider-nav-item active"
          onclick="changeSlide(1)"
        ></button>
        <button class="slider-nav-item" onclick="changeSlide(2)"></button>
        <button class="slider-nav-item" onclick="changeSlide(3)"></button>
      </div>
    </div>
    <!--END OF SLIDER-->

    <!--MAIN-->
    <main>
      <form id="search-form">
        <input
          type="text"
          id="search-input"
          name="search"
          placeholder="Search by field name or location"
        />
        <button type="submit">Search</button>
      </form>
      <h1>Welcome to Sports Field Rentals!</h1>
      <section id="lately-posted">
        <h3>Lately Posted Fields</h3>
        <div class="field-list" id="lately-posted-fields"></div>
      </section>
      <section id="most-rented">
        <h3>Most Rented Fields</h3>
        <div class="field-list" id="most-rented-fields"></div>
      </section>
    </main>
    <!--END OF MAIN-->
    <footer>
      <p>&copy; 2023 Sports Field Rentals. All rights reserved.</p>
    </footer>
    <!--SCRIPT-->
    <script src="homepage.js"></script>
    <script src="browse.js"></script>
  </body>
</html>
