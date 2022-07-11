<?php

// connection

include '../connection.php';

// module

$module = 'service';
$action = 'update';

// var

$natureId = $_POST['natureId'];
$serviceName = filter_var($_POST['serviceName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE service
    SET
    natureId = ?,
    serviceName = ?
    WHERE
    serviceId = ?
");	

$update -> bind_param (
    "isi",
    $natureId, $serviceName, $_GET["id"]
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
