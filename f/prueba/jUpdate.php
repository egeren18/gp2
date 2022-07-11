<?php

// connect database
include '../connection.php';

// set variables
$c = $_GET["c"];

// query
$srubro = mysqli_query(
    $connection,
    "SELECT * FROM prueba
    WHERE pruebaId = '" . $c . "'
");

// select client
$r_prueba = mysqli_fetch_array($prueba);

// set fields
$purebaId = $r_prueba["pruebaId"];
$pruebaName = $r_prueba["prueba"];


// view
require_once '../v/prueba/jUpdate.php';
