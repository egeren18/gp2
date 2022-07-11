<?php

// connect database
include '../connection.php';

// set variables
$c = $_GET["c"];

// query
$requerimiento = mysqli_query(
    $connection,
    "SELECT * FROM requerimiento
    INNER JOIN rubro
    ON requerimiento.rubroId = rubro.rubroId
    INNER JOIN srubro
    ON requerimiento.sRubroId = srubro.sRubroId
    WHERE requerimientoId = '" . $c . "'
");

// select client
$r_requerimiento = mysqli_fetch_array($requerimiento);

// set fields
$requerimientoId = $r_requerimiento["requerimientoId"];
$requerimientoName = $r_requerimiento["requerimientoName"];
$rubroId = $r_requerimiento["rubroId"];
$rubroName = $r_requerimiento["rubroName"];
$pruebaId = $r_requerimiento["sRubroId"];
$pruebaName = $r_requerimiento["sRubroName"];

$rubro = mysqli_query(
        $connection, "SELECT * FROM rubro WHERE rubroStatus = 1"
);
$srubro = mysqli_query(
        $connection, "SELECT * FROM srubro WHERE sRubroStatus = 1"
);
// view
require_once '../v/requerimiento/jUpdate.php';
