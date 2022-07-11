<?php

// connection

include '../connection.php';

// module

$module = 'economicArea';
$action = 'update';

// var

$economicAreaName = filter_var($_POST['economicAreaName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE economicarea
    SET
    economicAreaName = ?
    WHERE
    economicAreaId = ?
");	

$update -> bind_param (
    "si",
    $economicAreaName, $_GET["id"]
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
