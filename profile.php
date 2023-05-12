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
<?php require_once('header.php')


?>


<main class="container mt-5" style="
    margin-top: 8rem !important;">
  <section id="user-profile" class="row">
    <div id="user-info" class="col-md-8">
      <h1 id="username"><?= $name ?></h1>
      <h2 id="username"><?= $username ?></h2>
      <p id="phone-number" contenteditable><?= $phoneNumber ?></p>
      <button id="edit-credentials" class="btn btn-primary">
        <i class="fas fa-edit"></i> Change Phone Number
      </button>
      <button id="post-field" class="btn btn-success" onclick="window.location.href='./post.php';">
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