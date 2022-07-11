<?php

// connect database
include '../connection.php';

// set variables
$c = $_GET["c"];

// query
$puntosControl = mysqli_query(
    $connection,
    "SELECT * FROM puntosControl
    INNER JOIN rubro
    ON puntosControl.rubroId = rubro.rubroId
    WHERE puntosControlId = '" . $c . "'
");

// select client
$r_puntosControl= mysqli_fetch_array($puntosControl);
// set fields
$puntosControlId = $r_puntosControl["puntosControlId"];
$rubroName = $r_puntosControl["rubroName"];
$puntosControlName = $r_puntosControl["puntosControlName"];
$puntosControlDescripcion= $r_puntosControl["puntosControlDescripcion"]; 
$debilidades= $r_puntosControl["debilidades"];
$carta= $r_puntosControl["cartaGerencia"];
$situaciones= $r_puntosControl["situacionesCriticas"];
$rubroId = $r_puntosControl["rubroId"];
$rubroName = $r_puntosControl["rubroName"];


$rubro = mysqli_query(
        $connection, "SELECT * FROM rubro WHERE rubroStatus = 1"
);


// view
require_once '../v/puntosControl/jUpdate.php';
