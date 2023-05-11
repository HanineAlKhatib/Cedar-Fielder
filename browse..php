<?php
require_once('header/header.php');
$search = $_GET['search'];

$searchedFields = $table->findSql("SELECT distinct(*) FROM fields WHERE name LIKE '%$search%' OR address LIKE '%$search%'");
require_once('../Slider/slider.php')
?>