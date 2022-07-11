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





// view
   require_once '../v/project/jRevision.php';
