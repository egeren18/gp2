<?php

// connection

include '../connection.php';

// select

$_nature = mysqli_query($master, "
    SELECT * FROM nature
    WHERE natureId = '" . $_GET["id"] . "'
");

$nature = $_nature -> fetch_object();

// view

require_once '../v/nature/jDelete.php';
