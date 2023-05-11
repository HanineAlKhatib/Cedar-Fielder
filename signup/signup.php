<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="signup.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>Sign Up</title>
</head>
<?php
require_once('../Slider/slider.php')

?>

<body class="signup">
  <!--NAVBAR-->
  <div id="navbar-placeholder"></div>
  <!--Signup container-->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="form-container">
          <h1>Sign Up</h1>
          <form>

            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" maxlength="50" required />
            </div>

            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" id="username" name="username" required />
            </div>

            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" id="password" name="password" minlength="8" required />
              <span class="placeholder">Include 8 characters: 1 uppercase, 1 digit, 1 special</span>
            </div>

            <div class="form-group">
              <label for="dateOfBirth">Date of Birth (YYYY-MM-DD):</label>
              <input type="date" id="dateOfBirth" name="dateOfBirth" min="1900-01-01" max="<?php echo date('Y-m-d'); ?>" required />
            </div>

            <div class="form-group">
              <label for="phoneNumber">Phone Number:</label>
              <input type="tel" id="phoneNumber" name="phoneNumber" pattern="\d{8}" maxlength="8" minlength="8" placeholder="00000000" required title="Please enter a valid 8-digit phone number." />
            </div>

            <div class="form-group text-center">
              <label for="user-type">Select User Type:</label>
              <select id="user-type" class="form-control">
                <option value="owner">Owner</option>
                <option value="user">User</option>
              </select>
            </div>

            <div class="form-group text-center">
              <button class="sgnup-btn" type="submit">Sign Up</button>
            </div>

          </form>


          <div class="form-text">
            Already have an account?
            <a class="text-link" type="submit" href="../login/login.php">Log In</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <p>&copy; 2023 Sports Field Rentals. All rights reserved.</p>
  </footer>
  <!--SCRIPT-->
  <script src="signup.js"></script>

</body>

</html>