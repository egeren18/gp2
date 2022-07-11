<?php

// connection

include '../connection.php';
include '../connection2.php';

// access

include '../allow.php';

// select

// select
$tsacId = $_GET["tsacId"];

$_tsacn = mysqli_query($master, "
    SELECT * FROM tsac
    WHERE tsacId = '" . $tsacId .  "'
");
$tsacn = $_tsacn -> fetch_object();
$tsacName  = $tsacn -> tsacName;


$v =$tsacId.'_'.$cuestionarioId;
$_tabla = mysqli_query($tipomc, "
    SELECT * FROM tipo_de_cuestionario_1
");
$_prisk = mysqli_query($tipod, "
    SELECT * FROM prisk where priskStatus = 1
");

// view

require_once '../v/pac/jCreate.php';
