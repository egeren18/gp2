<?php

// connection

include '../connection.php';

// var

$acId = $_GET['cod'];
$riskId = $_POST['riskId'] ?? '';
$decision = $_POST['decision'] ?? '';

// update

$update = $connection -> prepare ("
    UPDATE tracingopinion
    SET
    riskId = ?,
    decision = ?
    WHERE
    acId = ?
");

$update -> bind_param ("iii", $riskId, $decision, $acId);

$update -> execute();

// insert

$userId = $_SESSION["userId"];
$module = 'AC Tracing';
$action = 'Update';
$itemId = $acId;

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

echo "<body><script>window.history.go(-2);</script>";
