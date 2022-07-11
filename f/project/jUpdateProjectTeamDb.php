<?php

// connection

include '../connection.php';
include '../connection2.php';

$p = $_GET["p"];
$u = $_GET["u"];
$designatedId = $_POST["designatedId"];
$roleId = $_POST["roleId"];
$lineId = $_POST["lineId"];

// update

$update = $connection -> prepare ("UPDATE projectteam SET designatedId = ?, roleId = ?, lineId = ? WHERE projectTeamId = ?");
$update -> bind_param ("iiii", $designatedId, $roleId, $lineId, $u);
$update -> execute();

// trace

$userId = $_SESSION["userId"];
$module = 'Project';
$action = 'Update Team';
$itemId = $p;

$trace = $connection -> prepare ("INSERT INTO trace (userId, module, action, itemId) VALUES (?,?,?,?)");
$trace -> bind_param ("issi", $userId, $module, $action, $itemId);
$trace -> execute();

// view

echo "<script> window.location='../c/project.php?m=projectTeam&p=" . $p . "'</script>";
