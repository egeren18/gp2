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
$pid = $client2 -> diagnosticoId;

// select

$_c = mysqli_query($master, "
    SELECT * FROM pregunta
    WHERE preguntaId = '" . $_GET["pid"] . "'
");

$c = $_c -> fetch_object();
$d = $c -> preguntaId ;

// select

$_cp = mysqli_query($master, "
    SELECT * FROM dcp
    WHERE preguntaId = '" . $d . "'
    AND dcpStatus = 1
");

// view

require_once '../v/preguntaD/jUpdate2.php';