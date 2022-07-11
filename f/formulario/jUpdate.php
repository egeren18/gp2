<?php

// connection

include '../connection.php';

// module

$module = 'division';

// select

$_division = mysqli_query($master, "
    SELECT * FROM division
    WHERE divisionId = '" . $_GET["id"] . "'
");

$division = $_division -> fetch_object();

// view

require_once '../v/division/jUpdate.php';
