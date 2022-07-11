<?php

// connection

include '../connection.php';

// module

$module = 'level';
$action = 'delete';

// var

$levelStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE level
    SET
    levelStatus = ?
    WHERE
    levelId = ?
");

$update -> bind_param (
    "ii",
    $levelStatus, $_GET["id"]
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
