<?php

// connect
include '../connection.php';

// var

$c = $_GET["c"] ?? '';

// select

$project = mysqli_query(
    $connection,
    "SELECT * FROM project
    INNER JOIN ac
    ON project.acId = ac.acId
    INNER JOIN client
    ON ac.clientId = client.clientId
    INNER JOIN service
    ON ac.serviceId = service.serviceId
    WHERE project.projectId = '" . $c . "'
");

$r_project = $project -> fetch_object();

// select

$riskPartner = mysqli_query(
    $connection, "
    SELECT * FROM user
    WHERE userStatus = 2
");

$r_riskPartner = $riskPartner -> fetch_object();

// select

$reviewer = mysqli_query(
    $connection, "
    SELECT * FROM user
    WHERE userAdmin = 1
    AND userStatus = 1
    
");

// select

$doer = mysqli_query(
    $connection, "
    SELECT * FROM user
    WHERE userStatus = 1
");

// select

$_reviewerTeam = mysqli_query(
    $connection, "
    SELECT * FROM projectteam
    INNER JOIN user
    ON projectteam.userId = user.userId
    WHERE projectteam.designatedId = 2
");

// select

$_doerTeam = mysqli_query(
    $connection, "
    SELECT * FROM projectteam
    INNER JOIN user
    ON projectteam.userId = user.userId
    WHERE projectteam.designatedId = 1
");

// select

$service = mysqli_query(
    $connection, "
    SELECT * FROM service
    WHERE serviceStatus = 1
");

$r_service = $service -> fetch_object();

// select

$nature = mysqli_query(
    $connection, "
    SELECT * FROM service
    INNER JOIN nature
    ON service.natureId = nature.natureId
    WHERE service.serviceId = '" . $r_service -> serviceId . "'
");

$r_nature = $nature -> fetch_object();

// select

$qtyIP = mysqli_query(
    $connection, "
    SELECT COUNT(statusId) AS inProcess
    FROM projectstrategyanswer
    WHERE projectId = '" . $c . "'
    AND statusId = 1;
");

$r_qtyIP = mysqli_fetch_array($qtyIP);

$qIP = $r_qtyIP["inProcess"];

// select

$qtyC = mysqli_query(
    $connection, "
    SELECT COUNT(statusId) AS completed
    FROM projectstrategyanswer
    WHERE projectId = '" . $c . "'
    AND statusId = 2;
");

$r_qtyC = mysqli_fetch_array($qtyC);

$qC = $r_qtyC["completed"];

// select

$qtyTC = mysqli_query(
    $connection, "
    SELECT COUNT(statusId) AS toCorrect
    FROM projectstrategyanswer
    WHERE projectId = '" . $c . "'
    AND statusId = 3;
");

$r_qtyTC = mysqli_fetch_array($qtyTC);

$qTC = $r_qtyTC["toCorrect"];

// select

$qtyR = mysqli_query(
    $connection, "
    SELECT COUNT(statusId) AS reviewed
    FROM projectstrategyanswer
    WHERE projectId = '" . $c . "'
    AND statusId = 4;
");

$r_qtyR = mysqli_fetch_array($qtyR);

$qR = $r_qtyR["reviewed"];

// select

$qtyF = mysqli_query(
    $connection, "
    SELECT COUNT(statusId) AS finished
    FROM projectstrategyanswer
    WHERE projectId = '" . $c . "'
    AND statusId = 5;
");

$r_qtyF = mysqli_fetch_array($qtyF);

$qF = $r_qtyF["finished"];





































// query
$sql_qStrategy = mysqli_query($connection, "SELECT COUNT(*) total FROM qstrategy WHERE itemStatus = 1");
$r_sql_qStrategy = mysqli_fetch_array($sql_qStrategy);

// var
$qty = $r_sql_qStrategy['total'];

// query
$qStrategy_1 = mysqli_query($connection, "SELECT * FROM qstrategy WHERE itemStatus = 1");
$qStrategy_2 = mysqli_query($connection, "SELECT * FROM qstrategy WHERE itemStatus = 1");

require_once '../v/project/jStrategy.php';
