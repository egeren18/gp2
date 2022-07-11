<?php

// connect database
include '../connection.php';

// set variables
$c = $_GET["c"];

// query
$puntos = mysqli_query(
    $connection,
    "SELECT * FROM puntosControl
    WHERE puntosControlId = '" . $c . "'
");

// select client
$r_puntos = mysqli_fetch_array($puntos);

// set fields
$puntosId = $r_puntos["puntosControlId"];
$puntosName = $r_puntos["puntosControlName"];

// view
require_once '../v/puntosControl/jDelete.php';
