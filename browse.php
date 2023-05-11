<?php
require_once('header.php');

$search = $_GET['search']; // Assuming you're retrieving the search query from the GET parameter

$query = "SELECT * FROM fields WHERE name LIKE '%$search%' OR address LIKE '%$search%'";
$searchedFields = $table->findSql($query);
?>

<body class="homepage">
    <?php require_once('slider.php'); ?>
    <main>
        <form id="search-form">
            <input type="text" id="search-input" name="search" placeholder="Search by field name or location" />
            <button type="submit">Search</button>
        </form>
        <h1>Browse</h1>
        <section id="lately-posted">
            <div class="field-list" id="lately-posted-fields">
                <!-- Results will be populated dynamically by AJAX -->
            </div>
        </section>
    </main>

    <script src="./js/browse.js"></script>
</body>