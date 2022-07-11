<?php

// connection

include '../connection.php';

// module

$module = 'economicArea';
$action = 'delete';

// var

$economicAreaStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE economicarea
    SET
    economicAreaStatus = ?
    WHERE
    economicAreaId = ?
");

$update -> bind_param (
    "ii",
    $economicAreaStatus, $_GET["id"]
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

echo "<script> window.location='../c/{$module}.php?m=index&n=deleted'</script>";
