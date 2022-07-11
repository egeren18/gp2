<?php
// connect database
include '../connection.php';
$clientId = $_POST['clientId'];
$client = mysqli_query($master, "
    SELECT * FROM client
    WHERE clientId = '" . $clientId . "'
     "
); 
// select client
$r_client = mysqli_fetch_array($client);

// set fields
$clientName = $r_client["clientName"];



$rubro = mysqli_query($master, "
    SELECT * FROM rubro
     WHERE rubroStatus = 1
     ORDER BY rubroId"
);   
// view
require_once '../v/prueba/jAddRubro.php';
