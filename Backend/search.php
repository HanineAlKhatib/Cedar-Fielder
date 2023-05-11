<?php
require_once('db_config');

$search = $_GET['search']; // Assuming you're retrieving the search query from the GET parameter

$query = "SELECT * FROM fields WHERE name LIKE '%$search%' OR address LIKE '%$search%'";
$searchedFields = $table->findSql($query);

// Generate HTML markup for search results
foreach ($searchedFields as $field) {
    echo '<div>';
    echo '<a href="field.php?id=' . $field['id'] . '" class="field">';
    echo '<img src="' . $field['image_url'] . '" alt="Field Image" />';
    echo '<div class="field-info">';
    echo '<h3>' . $field['name'] . '</h3>';
    echo '<p>' . $field['address'] . '</p>';
    echo '</div>';
    echo '</a>';
    echo '</div>';
}
?>
