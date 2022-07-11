<?php

// connection

include '../connection.php';
include '../connection2.php';

// var

$clientId = $_GET["cid"];
$clientStatus = 0;

// update

$update = $connection -> prepare ("
    UPDATE client
    SET
    clientStatus = ?
    WHERE
    clientId = ?
");

$update -> bind_param (
    "ii",
    $clientStatus, $clientId
);

$update -> execute();

// trace

$userId = $_SESSION["userId"];
$module = 'Clientes';
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

echo "<script> window.location='../c/client.php?m=index&n=deleted'</script>";
