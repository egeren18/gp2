<?php

// connection

include '../connection.php';

$p = $_GET["p"];
$u = $_GET["u"];

// delete

$delete = $connection -> prepare ("
    DELETE FROM projectteam
    WHERE
    projectTeamId = ?
");

$delete -> bind_param (
    "i",
    $u
);

$delete -> execute();

// trace

$userId = $_SESSION["userId"];
$module = 'Project';
$action = 'Delete Team';
$itemId = $p;

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
