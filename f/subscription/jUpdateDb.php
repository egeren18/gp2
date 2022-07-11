<?php

// connection

include '../connection.php';

// module

$module = 'subscription';
$action = 'update';

// var

$subscriptionName = $_POST["subscriptionName"];
$subscriptionDays = $_POST["subscriptionDays"];

// update

$update = $master -> prepare ("
    UPDATE subscription SET
    subscriptionName = ?,
    subscriptionDays = ?
    WHERE subscriptionId = ?
");

$update -> bind_param (
	"sii",
	$subscriptionName, $subscriptionDays, $_GET["id"]
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["id"]);

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
