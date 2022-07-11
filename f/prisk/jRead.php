<?php

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';
$d = date('d-m-y / g:i a');

// select
$_date = mysqli_query($master, "
    SELECT * FROM prisk
    WHERE priskId = '" . $_GET["cid"] . "'
");

$date = $_date -> fetch_object();
$dateTime = $date -> date ;


$_client = mysqli_query($master, "
    SELECT * FROM prisk
    WHERE priskId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$priskName = $client -> priskName ;

// view

require_once '../v/prisk/jRead.php';