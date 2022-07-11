<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables.
 */

$acId = $_GET['aid'];
$u = $_GET['u'];

/*
 * Elimina un registro en la base de datos.
 */

$delete = $connection -> prepare ("DELETE FROM acteam WHERE acTeamId = ?");
$delete -> bind_param ("i", $u);
$delete -> execute();

/*
 * Variables.
 */

$userId = $_SESSION["userId"];
$module = 'AC';
$action = 'Delete AC Team';
$itemId = $u;

/*
 * Realiza un registro en la base de datos.
 */

$trace = $connection -> prepare ("INSERT INTO trace (userId, module, action, itemId) VALUES (?,?,?,?)");
$trace -> bind_param ("issi", $userId, $module, $action, $itemId);
$trace -> execute();

echo "<script> window.location='../c/ac.php?m=team&aid={$acId}&n=deleted'</script>";
