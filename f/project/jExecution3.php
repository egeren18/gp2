<?php

// connect

include '../connection.php';
include '../connection2.php';

// var

$c = $_GET["c"];

// select
$_f = mysqli_query($master, "
    SELECT * FROM frecuencia
    WHERE projectId = '" . $c . "'
");

$f = $_f -> fetch_object();
$fa = $f -> frecuencia;

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

$qtyIP = mysqli_query($connection, "SELECT COUNT(statusId) AS inProcess FROM projectexecutionanswer WHERE projectId = '" . $c . "' AND statusId = 1;");
$r_qtyIP = mysqli_fetch_array($qtyIP);
$qIP = $r_qtyIP["inProcess"];

// select

$qtyC = mysqli_query($connection, "SELECT COUNT(statusId) AS completed FROM projectexecutionanswer WHERE projectId = '" . $c . "' AND statusId = 2;");
$r_qtyC = mysqli_fetch_array($qtyC);
$qC = $r_qtyC["completed"];

// select

$qtyTC = mysqli_query($connection, "SELECT COUNT(statusId) AS toCorrect FROM projectexecutionanswer WHERE projectId = '" . $c . "' AND statusId = 3;");
$r_qtyTC = mysqli_fetch_array($qtyTC);
$qTC = $r_qtyTC["toCorrect"];

// select

$qtyR = mysqli_query($connection, "SELECT COUNT(statusId) AS reviewed FROM projectexecutionanswer WHERE projectId = '" . $c . "' AND statusId = 4;");
$r_qtyR = mysqli_fetch_array($qtyR);
$qR = $r_qtyR["reviewed"];

// select

$qtyF = mysqli_query($connection, "SELECT COUNT(statusId) AS finished FROM projectexecutionanswer WHERE projectId = '" . $c . "' AND statusId = 5;");
$r_qtyF = mysqli_fetch_array($qtyF);
$qF = $r_qtyF["finished"];

// select

$sql_qExecution = mysqli_query($master, "SELECT COUNT(*) total FROM qexecution WHERE itemStatus = 1");
$r_sql_qExecution = mysqli_fetch_array($sql_qExecution);
$qty = $r_sql_qExecution['total'];

// select

$qExecution_1 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_2 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_3 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_4 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_5 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_6 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_7 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_8 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_9 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_10 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_11 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_12 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_13 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_14 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_15 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_16 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

require_once '../v/project/jExecution3.php';
