<?php
$module = 'preguntaD';
$action = 'delete';

// connection

include '../connection.php';

// var

$clientId = $_GET["pid"];
$c2 = $_GET["cid"];
$clientStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE pregunta
    SET
    preguntaStatus = ?
    WHERE
    preguntaId = ?
");

$update -> bind_param (
    "ii",
    $clientStatus, $clientId
);

$update -> execute();

// trace

$userId = $_SESSION["userId"];
$module = 'preguntaD';
$action = 'Delete';
$itemId = $clientId;

$trace = $master -> prepare ("
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

echo "<script> window.location='../c/preguntaD.php?m=list&n=deleted&pid={$c2}'</script>";
