<?php

// connection

include '../connection.php';

// var

$n = $_GET["n"] ?? '';

// select

$_client = mysqli_query(
    $connection,
    "SELECT * FROM client
    WHERE clientStatus = 1
");

// view

require_once '../v/ac/jClient.php';
