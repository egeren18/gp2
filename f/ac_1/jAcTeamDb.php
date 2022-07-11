<?php

// connection

include '../connection.php';

$a = $_GET["a"];
$userId = $_POST["userId"] ?? '';
$designatedId = $_POST["designatedId"] ?? '';

// insert

$insert = $connection -> prepare("
    INSERT INTO acteam
    (acId, userId, designatedId)
    VALUES
    (?,?,?)
");

$insert -> bind_param(
    "iii",
    $a, $userId, $designatedId
);

$insert -> execute();
    
// trace

$userId = $_SESSION["userId"];
$module = 'AC';
$action = 'Create AC Team';
$itemId = $a;

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

echo "<body><script> window.location='../c/ac.php?m=acTeam&a=" . $a . "&n=added'</script>";
