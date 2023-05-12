<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile - Sports Field Rentals</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <link rel="stylesheet" href="./css/about.css" />
</head>
<?php require_once('header.php')


?>

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
            <button class="slider-nav-item active" onclick="changeSlide(1)"></button>
            <button class="slider-nav-item" onclick="changeSlide(2)"></button>
            <button class="slider-nav-item" onclick="changeSlide(3)"></button>
        </div>
    </div>
    <!--END OF SLIDER-->
    <footer>
        <p>&copy; 2023 Sports Field Rentals. All rights reserved.</p>
    </footer>
    <!--SCRIPT-->
    <script src="./js/index.js"></script>

</body>

</html>ssss