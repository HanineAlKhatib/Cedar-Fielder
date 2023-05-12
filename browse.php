<?php
require_once('header.php');


?>
  <link rel="stylesheet" href="./css/index.css" />
  <link rel="stylesheet" href="./css/browse.css" />
<body class="homepage">
    <?php require_once('slider.php'); ?>
    <main>
        <form id="search-form">
            <input type="text" id="search-input" name="search" placeholder="Search by field name or location" />
            <button type="submit">Search</button>
        </form>
        <h1 id="title">Browse for </h1>
        <section id="lately-posted">
            <div class="field-list" id="lately-posted-fields">
                <!-- Results will be populated dynamically by AJAX -->
            </div>
        </section>
    </main>

    <script src="./js/browse.js"></script>
</body>