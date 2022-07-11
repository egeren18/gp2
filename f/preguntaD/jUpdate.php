<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client2 = mysqli_query($master, "
    SELECT * FROM diagnostico
    WHERE diagnosticoId = '" . $_GET["cid"] . "'
");
$client2 = $_client2 -> fetch_object();

// select

$_client = mysqli_query($master, "
    SELECT * FROM pregunta
    WHERE preguntaId = '" . $_GET["pid"] . "'
");

$c = $_client -> fetch_object();
$d = $c -> preguntaId ;

// select

$_audit = mysqli_query($master, "
    SELECT * FROM dcp
    WHERE preguntaId = '" . $d . "'
");

// view

require_once '../v/preguntaD/jUpdate.php';