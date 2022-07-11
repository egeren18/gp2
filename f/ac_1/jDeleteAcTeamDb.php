<?php
          
// connection

include '../connection.php';
          
// var

$a = $_GET['a'];
$u = $_GET['u'];

// delete

$delete = $connection -> prepare ("
    DELETE FROM acteam
    WHERE
    acTeamId = ?
");

$delete -> bind_param (
    "i",
    $u
);

$delete -> execute();

// trace

$userId = $_SESSION["userId"];
$module = 'AC';
$action = 'Delete AC Team';
$itemId = $u;

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

echo "<body><script> window.location='../c/ac.php?m=acTeam&a=" . $a . "&n=deleted'</script>";
