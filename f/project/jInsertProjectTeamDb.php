<?php

// connection

include '../connection.php';
include '../connection2.php';

$p = $_GET["p"];
$u = $_POST["userId"];
$designatedId = $_POST["designatedId"];
$roleId = $_POST["roleId"];
$lineId = $_POST["lineId"];

// insert

$insert = $connection -> prepare("INSERT INTO projectteam (projectId, userId, designatedId, roleId, lineId) VALUES (?,?,?,?,?)");
$insert -> bind_param("iiiii", $p, $u, $designatedId, $roleId, $lineId);
$insert -> execute();
    
// trace

$userId = $_SESSION["userId"];
$module = 'Project';
$action = 'Insert Team';
$itemId = $p;

$trace = $connection -> prepare ("INSERT INTO trace (userId, module, action, itemId) VALUES (?,?,?,?)");
$trace -> bind_param ("issi", $userId, $module, $action, $itemId);
$trace -> execute();

// view

echo "<script> window.location='../c/project.php?m=projectTeam&p=" . $p . "'</script>";
