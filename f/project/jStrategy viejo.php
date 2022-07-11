<?php

// connect

include '../connection.php';
include '../connection2.php';

// var

$c = $_GET["c"];

// select

$_project = mysqli_query($connection, "SELECT * FROM project INNER JOIN ac ON project.acId = ac.acId INNER JOIN client ON ac.clientId = client.clientId WHERE project.projectId = '" . $c . "'");
$project = $_project -> fetch_object();

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

$qtyIP = mysqli_query($connection, "SELECT COUNT(statusId) AS inProcess FROM projectstrategyanswer WHERE projectId = '" . $c . "' AND statusId = 1;");
$r_qtyIP = mysqli_fetch_array($qtyIP);
$qIP = $r_qtyIP["inProcess"];

// select

$qtyC = mysqli_query($connection, "SELECT COUNT(statusId) AS completed FROM projectstrategyanswer WHERE projectId = '" . $c . "' AND statusId = 2;");
$r_qtyC = mysqli_fetch_array($qtyC);
$qC = $r_qtyC["completed"];

// select

$qtyTC = mysqli_query($connection, "SELECT COUNT(statusId) AS toCorrect FROM projectstrategyanswer WHERE projectId = '" . $c . "' AND statusId = 3;");
$r_qtyTC = mysqli_fetch_array($qtyTC);
$qTC = $r_qtyTC["toCorrect"];

// select

$qtyR = mysqli_query($connection, "SELECT COUNT(statusId) AS reviewed FROM projectstrategyanswer WHERE projectId = '" . $c . "' AND statusId = 4;");
$r_qtyR = mysqli_fetch_array($qtyR);
$qR = $r_qtyR["reviewed"];

// select

$qtyF = mysqli_query($connection, "SELECT COUNT(statusId) AS finished FROM projectstrategyanswer WHERE projectId = '" . $c . "' AND statusId = 5;");
$r_qtyF = mysqli_fetch_array($qtyF);
$qF = $r_qtyF["finished"];

// select

$sql_qStrategy = mysqli_query($master, "SELECT COUNT(*) total FROM qstrategy WHERE itemStatus = 1");
$r_sql_qStrategy = mysqli_fetch_array($sql_qStrategy);
$qty = $r_sql_qStrategy['total'];

// select

$qStrategy_1 = mysqli_query($master, "SELECT * FROM qstrategy WHERE itemStatus = 1");

// select

$qStrategy_2 = mysqli_query($master, "SELECT * FROM qstrategy WHERE itemStatus = 1");

require_once '../v/project/jStrategy.php';
