<?php

// connection

include '../connection.php';

// access

include '../allow.php';

// select
$tsacId = $_GET["tsacId"];
$_tn = mysqli_query($master, "
    SELECT * FROM tsac
    WHERE tsacId = '" . $tsacId . "'
");
$tn = $_tn -> fetch_object();
$tname = $tn -> tsacName;

$_cp = mysqli_query($tipomc, "
    SELECT * FROM tipo_de_cuestionario_$tsacId
    WHERE cuestionarioStatus = 1
");

// view

require_once '../v/cac/jCreate.php';