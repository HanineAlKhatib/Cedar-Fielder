<?php

setcookie('username', '', time() - 3600, "/");
setcookie('user_id', '', time() - 3600, "/");
setcookie('phone_number', '', time() - 3600, "/");
setcookie('dob', '', time() - 3600, "/");

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Cedar Fielder</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

  <link rel="stylesheet" href="./css/login.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
  <!-- NAVBAR -->

  <!-- CONTAINER -->

  <div class="container justify-content-end">
    <div class="row p-3 justify-content-center">
      <div class="col-md-12">
        <form id="login-form" class="form">
          <h1>Welcome Back!</h1>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required />
          </div>
          <div class="form-group text-center">
            <button class="lgin-btn" type="submit">Log In</button>
          </div>
          <div class="form-group">
            <p>
              Don't have an account?
              <a class="text-link" href="../signup/signup.php">Sign up</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <footer>
    <p>&copy; 2023 Sports Field Rentals. All rights reserved.</p>
  </footer>
  <!-- SCRIPT -->

  <script src="./js/login.js"></script>
</body>

</html>