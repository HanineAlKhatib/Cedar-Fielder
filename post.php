<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./css/post.css" />


  <title>Post A Field</title>
</head>
<?php require_once('header.php') ?>

<body>
  <!-- NAVBAR -->
  <div id="navbar-placeholder"></div>

  <div class="container mt-5">
    <h1 class="text-center mb-4">Post a Field</h1>
    <form id="post-field-form" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="name" class="form-label">Field Name:</label>
            <input type="text" class="form-control" id="name" name="name" required />
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="size" class="form-label">Field Size:</label>
            <input type="text" class="form-control" id="size" name="size" step="0.01" required />
          </div>

        </div>
      </div>
      <div class="mb-3">
        <label for="sport-types" class="form-label">Sport Types:</label>

        <select class="form-select" id="type" name="sportType" required>
          <option value="football">Football</option>
          <option value="basketball">Basketball</option>
          <option value="tennis">Tennis</option>
          <option value="volleyball">Volleyball</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Address:</label>
        <input type="text" class="form-control" id="address" name="address" required />
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="type" class="form-label">Indoor/Outdoor:</label>
            <select class="form-select" id="type" name="type" required>
              <option value="indoor">Indoor</option>
              <option value="outdoor">Outdoor</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="openHours" class="form-label">Opening Hours:</label>
            <input type="time" class="form-control" id="openHours" name="openHours" required step="3600" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="closeHours" class="form-label">Closing Hours:</label>
            <input type="time" class="form-control" id="closeHours" name="closeHours" required step="3600" />
          </div>
        </div>


      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="pricePerHours" class="form-label">Price per Hour $:</label>
            <input type="number" class="form-control" id="pricePerHours" name="pricePerHours" min="0" step="0.01" required />
          </div>

        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="minRentHours" class="form-label">Minimum Rent Hours:</label>
            <input type="number" class="form-control" id="minRentHours" name="minRentHours" min="0" required />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input class="form-control" type="file" id="image" name="image" accept="image/*" required />
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-md-6">
          <div id="image-preview-container" style="overflow: hidden; padding-bottom: 10px;">
            <img id="image-preview" src="#" alt="Image Preview" style="display: none; max-width: 100%; max-height: 100%;">
          </div>
        </div>

      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
      </div>
    </form>
  </div>
  </div>


  <script src="./js/post.js"></script>
  <footer class="text-center py-3">
    <p>&copy; 2023 Sports Field Rentals. All rights reserved.</p>
  </footer>
</body>

</html>