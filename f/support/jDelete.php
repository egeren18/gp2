<?php

// connect database
include '../connection.php';

// set variables
$c = $_GET["c"];

// query
$client = mysqli_query(
    $connection,
    "SELECT * FROM client
    WHERE clientId = '" . $c . "'
");

// select client
$r_client = mysqli_fetch_array($client);

// set fields
$clientId = $r_client["clientId"];
$clientName = $r_client["clientName"];

// view
require_once '../v/client/jDelete.php';
