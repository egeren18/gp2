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
$clientNit = $r_client["clientNit"];
$clientAddress = $r_client["clientAddress"];
$clientCity = $r_client["clientCity"];
$clientState = $r_client["clientState"];
$countryId = $r_client["countryId"];
$clientZipCode = $r_client["clientZipCode"];
$clientContact = $r_client["clientContact"];
$clientPhone1 = $r_client["clientPhone1"];
$clientPhone2 = $r_client["clientPhone2"];
$clientEmail = $r_client["clientEmail"];
$clientWebPage = $r_client["clientWebPage"];
$clientObservations = $r_client["clientObservations"];

// view
require_once '../v/client/jUpdate.php';
