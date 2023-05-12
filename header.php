<?php
require_once('./Backend/db_config.php');


if (!isset($_COOKIE['username'])) {
  echo "<script>window.location = '/cedar-fielder/login.php'</script>";
}

$username = $_COOKIE['username'];
$user_id = $_COOKIE['user_id'];
$name = $_COOKIE['name'];
$dob = $_COOKIE['dob'];
$phoneNumber = $_COOKIE['phone_number'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cedar Fielder</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/header.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>

<body>


  <nav class="nav">
    <div class="navbar-brand">Cedar Fielder</div>
    <div class="navbar-buttons">

      <div class="navbar-buttons">
        <button class="nav-btn profile-btn" id="home">Home</button>
        <button class="nav-btn profile-btn" id="browse">Browse</button>
        <button class="nav-btn profile-btn" id="prf">Profile</button>

        <button class="nav-btn signout-btn" id="signOut">Sign out</button>
      </div>
    </div>
  </nav>

  <script src="./js/header.js"></script>


</html>