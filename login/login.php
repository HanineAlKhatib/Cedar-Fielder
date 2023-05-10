<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Cedar Fielder</title>
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
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <!-- NAVBAR -->
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
    <!-- CONTAINER -->

    <div class="container justify-content-end">
      <div class="row p-3 justify-content-center">
        <div class="col-md-12">
          <form id="login-form" class="form">
            <h1>Welcome Back!</h1>
            <div class="form-group">
              <label for="username">Username</label>
              <input
                type="text"
                class="form-control"
                id="username"
                name="username"
                required
              />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                name="password"
                required
              />
            </div>
            <div class="form-group text-center">
              <button class="lgin-btn" type="submit">Log In</button>
            </div>
            <div class="form-group">
              <p>
                Don't have an account?
                <a class="text-link" href="../signup/signup.html">Sign up</a>
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
    <script src="../header/header.js"></script>

    <script src="login.js"></script>
  </body>
</html>
