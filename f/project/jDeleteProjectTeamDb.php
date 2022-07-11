<?php

// connection

include '../connection.php';
include '../connection2.php';

$p = $_GET["p"];
$u = $_GET["u"];

// delete
// aqui se borra de la tabla de projectteam el usuario q este relacionado con el projectTeamId
$delete = $connection -> prepare ("DELETE FROM projectteam WHERE projectTeamId = ?");
$delete -> bind_param ("i", $u);
$delete -> execute();

// trace
// esto es pura paja  para mandar a la traza
$userId = $_SESSION["userId"];
$module = 'Project';
$action = 'Delete Team';
$itemId = $p;

$trace = $connection -> prepare ("INSERT INTO trace (userId, module, action, itemId) VALUES (?,?,?,?)");
$trace -> bind_param ("issi", $userId, $module, $action, $itemId);
$trace -> execute();

// view

echo "<script> window.location='../c/project.php?m=projectTeam&p=" . $p . "'</script>";
