<?php
$module = 'sp';
$action = 'delete';

// connection

include '../connection.php';
include '../connection2.php';

// var

$clientId = $_GET["cid"];
$clientStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE gestiontalento
    SET
    gestiontalentoStatus = ?
    WHERE
    gestiontalentoId = ?
");

$update -> bind_param (
    "ii",
    $clientStatus, $clientId
);

$update -> execute();

// trace

$userId = $_SESSION["userId"];
$module = 'Selecci&oacute;n talento';
$action = 'Delete';
$itemId = $clientId;

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

echo "<script> window.location='../c/sp.php?m=index&n=deleted'</script>";
