<?php

// connect database
include '../connection.php';

// set variables
$c = $_GET["c"];

// query
$requerimiento = mysqli_query(
    $connection,
    "SELECT * FROM requerimiento
    WHERE requerimientoId = '" . $c . "'
");

// select client
$r_requerimiento = mysqli_fetch_array($requerimiento);

// set fields
$requerimientoId = $r_requerimiento["requerimientoId"];
$requerimientoName = $r_requerimiento["requerimientoName"];

// view
require_once '../v/requerimiento/jDelete.php';
