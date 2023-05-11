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
<?php require_once('header.php') ?>

<body>
  <!--NAVBAR-->
  <div id="navbar-placeholder"></div>
  <script>
    (function() {
      const xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          document.getElementById("navbar-placeholder").innerHTML =
            this.responseText;
        }
      };
      xhttp.open("GET", "../header/header.html", true);
      xhttp.send();
    })();
  </script>
  <!--END NAVBAR-->
  <main class="container mt-5">
    <section id="user-profile" class="row">
      <!--<div id="profile-picture-container" class="col-md-4 text-center">
          <img
            id="profile-picture"
            alt="Profile picture"
            class="img-thumbnail"
          />
          <label for="upload-profile-picture" id="upload-label"
            >Change Picture</label
          >
          <input
            type="file"
            id="upload-profile-picture"
            style="display: none"
          />
        </div>-->
      <div id="user-info" class="col-md-8">
        <h2 id="username">Username</h2>
        <p id="phone-number">phone-number</p>
        <button id="edit-credentials" class="btn btn-primary">
          <i class="fas fa-edit"></i> Edit Credentials
        </button>
        <button id="post-field" class="btn btn-success" onclick="window.location.href='../poster/post.html';">
          <i class="fas fa-plus"></i> Post a Field
        </button>
      </div>
    </section>
    <section id="user-fields" class="mt-5">
      <h2>My Posted Fields</h2>
      <div class="field-list" id="my-posted-fields"></div>
      <h2 class="mt-4">Saved Fields</h2>
      <div class="field-list" id="saved-fields"></div>
      <h2 class="mt-4">Rented Fields</h2>
      <div class="field-list" id="rented-fields"></div>
    </section>
  </main>
  <footer class="text-center py-3">
    <p>&copy; 2023 Sports Field Rentals. All rights reserved.</p>
  </footer>
  <!--SCRIPT-->
  <script src="./js/profile.js"></script>

</body>

</html>