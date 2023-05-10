<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../header/header.css" />
    <link rel="stylesheet" href="signup.css" />

    <title>Sign Up</title>
  </head>
  <body class="signup">
    <!--NAVBAR-->
    <div id="navbar-placeholder"></div>
    <script>
      (function () {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
          if (this.readyState === 4 && this.status === 200) {
            document.getElementById("navbar-placeholder").innerHTML =
              this.responseText;
          }
        };
        xhttp.open("GET", "../header/header.html", true);
        xhttp.send();
      })();
    </script>
    <!--Signup container-->

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="form-container">
            <h1>Sign Up</h1>
            <form>
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required />
              </div>

              <div class="form-group">
                <label for="password">Password:</label>
                <input
                  type="password"
                  id="password"
                  name="password"
                  maxlength="8"
                  minlength="8"
                  placeholder="include 8 characters: 1 uppercase, 1 digit, 1 special"
                  required
                />
              </div>

              <div class="form-group">
                <label for="dateOfBirth">Date of Birth:</label>
                <input
                  type="date"
                  id="dateOfBirth"
                  name="dateOfBirth"
                  required
                />
              </div>
              <div class="form-group">
                <label for="phoneNumber">Phone Number:</label>
                <input
                  type="tel"
                  id="phoneNumber"
                  name="phoneNumber"
                  pattern="\d{8}"
                  maxlength="8"
                  minlength="8"
                  placeholder="00000000"
                  required
                />
              </div>

              <div class="form-group text-center">
                <button class="sgnup-btn" type="submit">Sign Up</button>
              </div>
            </form>

            <div class="form-text">
              Already have an account?
              <a class="text-link" type="submit" href="login.html">Log In</a>
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
    <script src="../header/header.js"></script>

  </body>
</html>
