<?php

// connection

include '../connection.php';

// var
// este codigo no se esta usando 
echo $projectId = $_GET["c"];
$acId = $_GET["a"];
$projectStatus = 1;
/*
// update

$update = $connection -> prepare ("
    UPDATE project
    SET
    projectStatus = ?
    WHERE
    projectId = ?
    AND
    acId = '" . $acId . "'
");

$update -> bind_param (
    "ii",
    $projectStatus, $projectId
);

$update -> execute();

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
        $projectId, $i
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
        $projectId, $i
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
        $projectId, $i
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
        $projectId, $i
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

echo "<body><script> window.location='../c/project.php?m=list&n=created'</script>";
*/