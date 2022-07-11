<?php

// connection

include '../connection.php';
include '../allow.php';

$oconsideracionesId = $_GET['oconsideracionesId'];

// select

$_rubro = mysqli_query($master, "
    SELECT * FROM rubro
    WHERE rubroStatus = 1
");

$_oconsideraciones = mysqli_query($master, "
    SELECT * FROM oconsideraciones
    WHERE oconsideracionesId = '" . $oconsideracionesId . "'
");

$oconsideraciones = $_oconsideraciones -> fetch_object();
$rubroN = $oconsideraciones -> rubroId ;
$titulo = $oconsideraciones -> titulo ; 
$texto1 = $oconsideraciones -> oconsideracionesText ;
$texto2 = $oconsideraciones -> oconsideracionesText2 ;


$_rubroName = mysqli_query($master, "
    SELECT * FROM rubro
    WHERE rubroId = '" . $rubroN . "'
");

$rubroNombre = $_rubroName -> fetch_object();
$rubroName = $rubroNombre -> rubroName ;


// view

require_once '../v/oconsideraciones/jRead.php';