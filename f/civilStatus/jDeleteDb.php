<?php

// connection

include '../connection.php';

// module

$module = 'civilStatus';
$action = 'delete';

// var

$civilStatusStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE civilstatus
    SET
    civilStatusStatus = ?
    WHERE
    civilStatusId = ?
");

$update -> bind_param (
    "ii",
    $civilStatusStatus, $_GET["id"]
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
