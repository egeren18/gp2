<?php

// connection

include '../connection.php';
include '../connection2.php';
// var

$c = $_GET["cid"];

// select

$_client = mysqli_query(
    $master,
    "SELECT * FROM bdatos
    WHERE bdatosId = '" . $c . "'
");

$client = $_client -> fetch_object();

// view

require_once '../v/bdatos/jDelete.php';
