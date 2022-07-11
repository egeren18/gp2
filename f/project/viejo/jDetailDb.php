<?php

// connection

include '../connection.php';

// var

$acId = $_POST["acId"];
$clientId = $_POST["clientId"];
$serviceId = $_POST["serviceId"];
$projectDateStart = $_POST["projectDateStart"];
$projectDateExpire = $_POST["projectDateExpire"];
$projectStatus = $_POST["projectStatus"];

// insert

$insert = $connection -> prepare("
    INSERT INTO project
    (acId, clientId, serviceId, projectDateStart, projectDateExpire, projectStatus)
    VALUES
    (?,?,?,?,?,?)
");

$insert -> bind_param(
    "iiissi",
    $acId, $clientId, $serviceId, $projectDateStart, $projectDateExpire,
    $projectStatus
);

$insert -> execute();

$p = $connection -> insert_id;

// select

$qty = mysqli_query(
    $connection, "
    SELECT COUNT(*) total
    FROM qplanning
    WHERE itemStatus = 1
");

$r_qty = $qty -> fetch_object();

$t = $r_qty -> total;

// insert

for ($i = 1; $i <= $t; $i++) {

    $newPlanning = $connection -> prepare("
        INSERT INTO projectplanninganswer
        (projectId, projectIId)
        VALUES
        (?,?)
    ");

    $newPlanning -> bind_param(
        "ii",
        $p, $i
    );

    $newPlanning -> execute();

}

// select

$qty = mysqli_query(
    $connection, "
    SELECT COUNT(*) total
    FROM qstrategy
    WHERE itemStatus = 1
");

$r_qty = $qty -> fetch_object();

$t = $r_qty -> total;

// insert

for ($i = 1; $i <= $t; $i++) {

    $newStrategy = $connection -> prepare("
        INSERT INTO projectstrategyanswer
        (projectId, projectIId)
        VALUES
        (?,?)
    ");

    $newStrategy -> bind_param(
        "ii",
        $p, $i
    );

    $newStrategy -> execute();

}

// select

$qty = mysqli_query(
    $connection, "
    SELECT COUNT(*) total
    FROM qexecution
    WHERE itemStatus = 1
");

$r_qty = $qty -> fetch_object();

$t = $r_qty -> total;

// insert

for ($i = 1; $i <= $t; $i++) {

    $newExecution = $connection -> prepare("
        INSERT INTO projectexecutionanswer
        (projectId, projectIId)
        VALUES
        (?,?)
    ");

    $newExecution -> bind_param(
        "ii",
        $p, $i
    );

    $newExecution -> execute();

}

// select

$qty = mysqli_query(
    $connection, "
    SELECT COUNT(*) total
    FROM qconclusion
    WHERE itemStatus = 1
");

$r_qty = $qty -> fetch_object();

$t = $r_qty -> total;

// insert

for ($i = 1; $i <= $t; $i++) {

    $newConclusion = $connection -> prepare("
        INSERT INTO projectconclusionanswer
        (projectId, projectIId)
        VALUES
        (?,?)
    ");

    $newConclusion -> bind_param(
        "ii",
        $p, $i
    );

    $newConclusion -> execute();

}

// trace

$userId = $_SESSION["userId"];
$module = 'Project';
$action = 'Add';
$itemId = $projectId;

// insert

$trace = $connection -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param (
    "issi",
    $userId, $module, $action, $itemId
);

$trace -> execute();

// view

echo "<body><script> window.location='../c/project.php?m=projectTeam&p=" . $p . "'</script>";
