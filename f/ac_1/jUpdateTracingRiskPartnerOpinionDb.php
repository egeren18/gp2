<?php

// connection

include '../connection.php';

// var

$acId = $_GET['cod'];
$decision = $_POST['decision'] ?? '';

// update

$update = $connection -> prepare ("
    UPDATE tracingriskpartneropinion
    SET
    decision = ?
    WHERE
    acId = ?
");

$update -> bind_param ("ii", $decision, $acId);

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
