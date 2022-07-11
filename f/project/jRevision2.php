<?php

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';

//var

$module = 'project';
$action = 'revison';

$c = $_GET["c"];
$i = $_GET["i"];
$f = $_GET["f"];
$r = $_GET["r"];

// select

$_ractivo = mysqli_query($master, "
    SELECT * FROM ractivo
    WHERE projectId = '" . $c . "'
");

$ractivo = $_ractivo -> fetch_object();

$_module = mysqli_query($connection, "
    SELECT * FROM test
    WHERE projectId = '" . $c . "'
    AND rubroId = '" . $r . "' AND frecuencia = 1
    ORDER BY srubroId
");

// select
$_f = mysqli_query($master, "
    SELECT * FROM frecuencia
    WHERE projectId = '" . $c . "'
");

$f = $_f -> fetch_object();
$fa = $f -> projectId;
$fa2 = $f -> frecuencia;
$dP1 = $f -> dateP1;
$dP2 = $f -> dateP2;
$dP3 = $f -> dateP3;
$dP4 = $f -> dateP4;
$dP5 = $f -> dateP5;
$dP6 = $f -> dateP6;

$dP7 = $f -> dateP7;
$dP8 = $f -> dateP8;
$dP9 = $f -> dateP9;
$dP10 = $f -> dateP10;
$dP11 = $f -> dateP11;
$dP12 = $f -> dateP12;





// view
   require_once '../v/project/jRevision2.php';
