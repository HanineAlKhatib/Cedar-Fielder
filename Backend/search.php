<?php
require_once('db_config.php');

$search = $_GET['search']; // Assuming you're retrieving the search query from the GET parameter

$query = "SELECT * FROM fields WHERE name LIKE '%$search%' OR address LIKE '%$search%'";
$searchedFields = $table->findSql($query);

// Generate HTML markup for search results

$counter = 0;
foreach ($searchedFields as $field) {
  if ($counter % 4 === 0) {
    echo '<div class="row">';
  }

  echo '<div class="col-md-3">';
  echo '<a href="field.php?id=' . $field['id'] . '" class="field">';
  echo '<img src="' . $field['image_url'] . '" alt="Field Image" />';
  echo '<div class="field-info">';
  echo '<h3>' . $field['name'] . '</h3>';
  echo '<p>' . $field['address'] . '</p>';
  echo '</div>';
  echo '</a>';
  echo '</div>';

  $counter++;

  if ($counter % 4 === 0 || $counter === count($searchedFields)) {
    echo '</div>';
  }
}
?>


