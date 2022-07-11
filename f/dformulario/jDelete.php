<?php

// connection

include '../connection.php';
include '../connection2.php';

// var

$c = $_GET["cid"];

// select

$_client = mysqli_query(
    $master,
    "SELECT * FROM c1
    WHERE c1Id = '" . $_GET['d'] . "'
");

$client = $_client -> fetch_object();

// view

require_once '../v/dformulario/jDelete.php';
