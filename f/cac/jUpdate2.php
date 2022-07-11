<?php

// connection
include '../connection.php';
include '../allow.php';

// select

$serviceId = $_GET["serviceId"];
$_client = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $_GET["serviceId"] . "'
    AND cacId = '" . $_GET["cacId"] . "'
");

$client = $_client -> fetch_object();
$cacId = $client -> cacId;
$maId = $client -> maId;

// select

$_country = mysqli_query($master, "
    SELECT * FROM modelo
    WHERE modeloId = '" . $_GET["serviceId"] . "'
");

$country = $_country -> fetch_object();
$diagnosticoName = $country -> modeloName;


// view

require_once '../v/cac/jUpdate2.php';