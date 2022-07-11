<?php

// connect

include '../connection.php';
include '../connection2.php';

// var
$c = $_GET["c"];
$serviceId = $_GET["serviceId"];
$md = $_GET["md"];
$amId = $_GET["amId"];

$v =$serviceId.'_'.$md;
$vv =$c.'_'.$serviceId.'_'.$md;

// select

$_project = mysqli_query($connection, "SELECT * FROM project WHERE projectId = '" . $c . "'");
$project = $_project -> fetch_object();

//select

$_client = mysqli_query($master, "SELECT * FROM client WHERE clientId = '" . $project -> clientId . "'");
$client = $_client -> fetch_object();


// select

$_leader = mysqli_query($connection, "SELECT * FROM projectteam WHERE projectId = '" . $project -> projectId . "' AND  designatedId = 7");

// select

$_consultant = mysqli_query($connection, "SELECT * FROM projectteam WHERE projectId = '" . $project -> projectId . "' AND  designatedId = 6");

$riskPartner = mysqli_query($master, "SELECT * FROM user WHERE userStatus = 2");
$r_riskPartner = $riskPartner -> fetch_object();

// select

$_service = mysqli_query($master, "SELECT * FROM service WHERE serviceStatus = 1");
$service = $_service -> fetch_object();

// select

$_nature = mysqli_query($master, "SELECT * FROM service INNER JOIN nature ON service.natureId = nature.natureId WHERE service.serviceId = '" . $service -> serviceId . "'");
$nature = $_nature -> fetch_object();


// select

$_mmodelo = mysqli_query($pquest, "SELECT * FROM permisos$vv WHERE amId = '" . $amId . "'");
$mmodelo = $_mmodelo -> fetch_object();
$mcategoriaId = $mmodelo -> mcategoriaId;
$cacId = $mmodelo -> cacId;
$actividadId = $mmodelo -> actividadId;
$mId = $mmodelo -> mId;
$modeloId = $mmodelo -> modeloId;
$npregunta = $mmodelo -> npregunta;
$normaText = $mmodelo -> normaText;

//Sacar actividadName
$_actividan = mysqli_query($appf, "SELECT * FROM act$v WHERE actividadId = '" . $actividadId . "'");
$actividan = $_actividan -> fetch_object();

$actividadName = $actividan -> actividadName;


//Sacar actividadName
$_cacn = mysqli_query($appf, "SELECT * FROM cac$v WHERE mcategoriaId = '" . $mcategoriaId . "'");
$cacn = $_cacn -> fetch_object();

$cacName = $cacn -> cacName;


//mostrar datos 


$_mmodelo2 = mysqli_query($pquest, "SELECT * FROM repuesta$vv WHERE amId = '" . $amId . "'");
$mmodelo2 = $_mmodelo2 -> fetch_object();


require_once '../v/project/planning/aEdit.php';












