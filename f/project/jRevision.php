<?php

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';

//var

$module = 'project';
$action = 'revison';


// var
$c = $_GET["c"];
$serviceId = $_GET["serviceId"];
$md = $_GET["md"];
$amId = $_GET["amId"];
$rubroId = $_GET["rubroId"];
$frecuencia = $_GET["frecuencia"];
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

$_mmodelo = mysqli_query($pquest, "SELECT * FROM ejecucion$vv WHERE  frecuencia = '" . $frecuencia  .  "'  and rubroId = '" . $rubroId . "'");


// view
   require_once '../v/project/jRevision.php';
