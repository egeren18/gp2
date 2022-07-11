<?php

// connection

include '../connection.php';

// module

$module = 'status';
$action = 'update';

// var

$statusName = filter_var($_POST['statusName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE status
    SET
    statusName = ?
    WHERE
    statusId = ?
");	

$update -> bind_param (
    "si",
    $statusName, $_GET["id"]
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
