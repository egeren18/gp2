<?php

// connect database
include '../connection.php';

// set variables
$c = $_GET["c"];

// query
$srubro = mysqli_query(
    $connection,
    "SELECT * FROM srubro
    WHERE sRubroId = '" . $c . "'
");

// select client
$r_srubro = mysqli_fetch_array($srubro);

// set fields
$sRubroId = $r_srubro["sRubroId"];
$sRubroName = $r_srubro["sRubroName"];

// view
require_once '../v/srubro/jDelete.php';
