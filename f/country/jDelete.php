<?php

// connection

include '../connection.php';

// select

$_country = mysqli_query($master, "
    SELECT * FROM country
    WHERE countryId = '" . $_GET["id"] . "'
");

$country = $_country -> fetch_object();

// view

require_once '../v/country/jDelete.php';
