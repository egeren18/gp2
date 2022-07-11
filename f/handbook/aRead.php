<?php

// connection

include '../connection.php';
include '../allow.php';

//get
$tsacId = $_GET["tsacId"];
$cuestionarioId = $_GET["cuestionarioId"];
$v =$tsacId.'_'.$cuestionarioId;

// select

$_client = mysqli_query($master, "
    SELECT * FROM tsac
    WHERE tsacId = '" . $tsacId . "'
");

$client = $_client -> fetch_object();
$tsacName = $client -> tsacName;
$tsacdate = $client -> date;


$_sac = mysqli_query($tipomc, "
    SELECT * FROM tipo_de_cuestionario_$tsacId
    where cuestionarioId = '" . $cuestionarioId . "'
");

$sac = $_sac -> fetch_object();
$version = $sac -> version;
$modeloName = $sac -> cuestionarioName;
$oldDate = $sac -> date;
$cdate = $sac -> date;


$_trazau = mysqli_query($master, "SELECT * FROM tracem WHERE serviceId = '" . $serviceId . "'  ");
$client = $_trazau -> fetch_object();

$_usert = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $client -> userId . "'");
$user = $_usert -> fetch_object();



$_cp11 = mysqli_query($tipod, "
    SELECT * FROM cuestionario$v
");

$_tabla = mysqli_query($bdac, "
    SELECT * FROM cuestionario$v
");


$_aaa = mysqli_query($tipomc, "
    SELECT * FROM tipo_de_cuestionario_$tsacId 
    WHERE cuestionarioId = '" . $cuestionarioId . "'
");

$aaa = $_aaa -> fetch_object();
$veve = $aaa -> version;
// view

require_once '../v/handbook/aRead.php';