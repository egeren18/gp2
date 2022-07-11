<?php

// connection

include '../connection.php';

// module

$module = 'level';

// select

$_level = mysqli_query($master, "
    SELECT * FROM level
    WHERE levelId = '" . $_GET["id"] . "'
");

$level = $_level -> fetch_object();

// view

require_once '../v/level/jUpdate.php';
