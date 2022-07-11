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
");

// select client
$r_puntosControl = mysqli_fetch_array($puntosControl);
// set fields
$puntosControlId = $r_puntosControl["puntosControlId"];
$rubroName = $r_puntosControl["rubroName"];
$puntosControlName = $r_puntosControl["puntosControlName"];
$puntosControlDescripcion= $r_puntosControl["puntosControlDescripcion"];
$puntosControlRecomendacion = $r_puntosControl["puntosControlRecomendacion"];
$rubroId = $r_puntosControl["rubroId"];
$rubroName = $r_puntosControl["rubroName"];
 
// view
require_once '../v/puntosControl/jConsulta.php';
