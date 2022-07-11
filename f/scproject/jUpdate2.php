<?php

// connection

include '../connection.php';
include '../allow.php';

//var
$actividadId = $_GET["actividadId"];
$cid = $_GET["cid"];
$projectId = $_GET["projectId"];
$v =$cid.'_'.$projectId;
// select
$_sservice = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $cid . "'
");

$sservice = $_sservice -> fetch_object();
$serviceName = $sservice -> serviceName;

$_scproject = mysqli_query($app, "
    SELECT * FROM project
    WHERE projectId = '" . $projectId . "'
");

$scproject = $_scproject -> fetch_object();
$projectName = $scproject -> projectName;
$date = $scproject -> date;


$_client = mysqli_query($appa, "
    SELECT * FROM project$v
    WHERE actividadId = '" . $actividadId . "'
");
$client = $_client -> fetch_object();
$actividadName = $client -> actividadName;
$actividadText = $client -> actividadText;
$mcategoriaId = $client -> mcategoriaId;


$_cclient = mysqli_query($appc, "
    SELECT * FROM project$v
    WHERE mcategoriaId = '" . $mcategoriaId . "'
");
$cclient = $_cclient -> fetch_object();
$cacName = $cclient -> cacName;


require_once '../v/scproject/jUpdate2.php';