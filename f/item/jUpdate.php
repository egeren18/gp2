<?php

// connect database
include '../connection.php';

// set variables
$c = $_GET["c"];

// query
$division = mysqli_query(
    $connection,
    "SELECT * FROM division
    WHERE divisionId = '" . $c . "'
");

// select
$r_division = mysqli_fetch_array($division);

// set fields
$divisionId = $r_division["divisionId"];
$divisionName = $r_division["divisionName"];

// view
require_once '../v/division/jUpdate.php';
