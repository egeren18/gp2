<?php

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';
$d = date('d-m-y / g:i a');

// select
$_date = mysqli_query($master, "
    SELECT * FROM bdatos
    WHERE bdatosId = '" . $_GET["cid"] . "'
");

$date = $_date -> fetch_object();
$dateTime = $date -> date ;


$_client = mysqli_query($master, "
    SELECT * FROM bdatos
    WHERE bdatosId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$bdatosName = $client -> bdatosName ;

// view

require_once '../v/bdatos/jRead.php';