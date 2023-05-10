<?php
require_once('./Backend/db_config.php');
require_once './Backend/cookie.php';
Cookie::set('user', ['name' => 'John Doe', 'email' => 'johndoe@example.com']);

$user = Cookie::get('');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cedar Fielder</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="header/header.css" />
</head>

<body>


  <nav class="nav">
    <div class="navbar-brand">Cedar Fielder</div>
    <div class="navbar-buttons">

      <div class="dropdown">
        <button class="dropbtn">
        <img src="https://via.placeholder.com/40x40.png?text=Profile" alt="Profile" class="profile-logo">

        </button>
        <div class="dropdown-content">
          <a href="#">My Profile</a>
          <a href="#">Sign Out</a>
        </div>
      </div>
    </div>
  </nav>

  <script src="header.js"></script>
</body>

</html>