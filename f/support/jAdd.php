<?php

// connect database
include '../connection.php';

// query
$country = mysqli_query(
    $connection,
    "SELECT * FROM country
    WHERE countryStatus = 1
    ORDER BY countryName
");

// view
require_once '../v/client/jAdd.php';
