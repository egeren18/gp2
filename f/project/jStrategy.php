<?php

// connect

include '../connection.php';
include '../connection2.php';

// var

$c = $_GET["c"];

$serviceId = $_GET["serviceId"];
$md = $_GET["md"];

$v =$serviceId.'_'.$md;
$vv =$c.'_'.$serviceId.'_'.$md;

// select

$_project = mysqli_query($connection, "SELECT * FROM project WHERE projectId = '" . $c . "'");
$project = $_project -> fetch_object();

// select

$_client = mysqli_query($connection, "SELECT * FROM client WHERE clientId = '" . $project -> clientId . "'");
$client = $_client -> fetch_object();


// select

$_leader = mysqli_query($connection, "SELECT * FROM projectteam WHERE projectId = '" . $project -> projectId . "' AND  designatedId = 7");

// select

$_consultant = mysqli_query($connection, "SELECT * FROM projectteam WHERE projectId = '" . $project -> projectId . "' AND  designatedId = 6");

// select

$riskPartner = mysqli_query($master, "SELECT * FROM user WHERE userStatus = 2");
$r_riskPartner = $riskPartner -> fetch_object();

// select

$_service = mysqli_query($master, "SELECT * FROM service WHERE serviceStatus = 1");
$service = $_service -> fetch_object();

// select

$_nature = mysqli_query($master, "SELECT * FROM service INNER JOIN nature ON service.natureId = nature.natureId WHERE service.serviceId = '" . $service -> serviceId . "'");
$nature = $_nature -> fetch_object();

// select

$qtyIP = mysqli_query($pquest, "SELECT COUNT(statusId) AS inProcess FROM repuesta$vv WHERE projectId = '" . $c . "' AND statusId = 1;");
$r_qtyIP = mysqli_fetch_array($qtyIP);
$qIP = $r_qtyIP["inProcess"];

// select

$qtyC = mysqli_query($pquest, "SELECT COUNT(statusId) AS completed FROM repuesta$vv WHERE projectId = '" . $c . "' AND statusId = 2;");
$r_qtyC = mysqli_fetch_array($qtyC);
$qC = $r_qtyC["completed"];

// select

$qtyTC = mysqli_query($pquest, "SELECT COUNT(statusId) AS toCorrect FROM repuesta$vv WHERE projectId = '" . $c . "' AND statusId = 3;");
$r_qtyTC = mysqli_fetch_array($qtyTC);
$qTC = $r_qtyTC["toCorrect"];

// select

$qtyR = mysqli_query($pquest, "SELECT COUNT(statusId) AS reviewed FROM repuesta$vv WHERE projectId = '" . $c . "' AND statusId = 4;");
$r_qtyR = mysqli_fetch_array($qtyR);
$qR = $r_qtyR["reviewed"];

// select

$qtyF = mysqli_query($pquest, "SELECT COUNT(statusId) AS finished FROM repuesta$vv WHERE projectId = '" . $c . "' AND statusId = 5;");
$r_qtyF = mysqli_fetch_array($qtyF);
$qF = $r_qtyF["finished"];

// select

$sql_qPlanning = mysqli_query($pquest, "SELECT COUNT(*) total FROM permisos$vv WHERE userId = '" . $_SESSION["userId"] . "'");
$r_sql_qPlanning = mysqli_fetch_array($sql_qPlanning);
$qty = $r_sql_qPlanning['total'];

// select


// select

// view

require_once '../v/project/jStrategy.php';
