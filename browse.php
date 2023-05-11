<?php
require_once('header.php');

$search = $_GET['search']; // Assuming you're retrieving the search query from the GET parameter

$query = "SELECT * FROM fields WHERE name LIKE '%$search%' OR address LIKE '%$search%'";
$searchedFields = $table->findSql($query);


?>
<body class="homepage">
    <?php require_once('slider.php')?>
<main>
    <h1>Browse</h1>
<form id="search-form" action="browse.php" method="GET">
      <input type="text" id="search-input" name="search" placeholder="Search by field name or location" />
      <button type="submit">Search</button>
    </form>

    <section id="lately-posted">
      <h3>Browse</h3>
      <div class="field-list" id="lately-posted-fields">
        <?php foreach ($searchedFields as $field) : ?>

          <div>
            <a href="field.php?id=<?= $field['id']; ?>" class="field">

              <img src="<?= $field['image_url']; ?>" alt="Field Image" />

              <div class="field-info">
                <h3><?= $field['name']; ?></h3>
                <p><?= $field['address']; ?></p>
              </div>
            </a>
          </div>

        <?php endforeach; ?>
      </div>
    </section>
</main>
</body>