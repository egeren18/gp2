<?php

// connection

include '../connection.php';
// var

$c = $_GET["cid"];

// select

$_client = mysqli_query(
    $master,
    "SELECT * FROM termycond
    WHERE termycondId = '" . $c . "'
");

$client = $_client -> fetch_object();

// view

require_once '../v/termycond/jDelete.php';
