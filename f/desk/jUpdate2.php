<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE categoriasId = '" . $_GET["pid"] . "'
");

$client = $_client -> fetch_object();
$d = $client -> diagnosticoId ;

// select

$_country = mysqli_query($master, "
    SELECT * FROM diagnostico
    WHERE diagnosticoId = '" . $d . "'
");

$country = $_country -> fetch_object();
$diagnosticoName = $country -> diagnosticoName ;


// view

require_once '../v/categoriaD/jUpdate2.php';







