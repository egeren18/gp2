<?php

// connection

include '../connection.php';

// module

$module = 'role';
$action = 'delete';

// var

$roleStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE role
    SET
    roleStatus = ?
    WHERE
    roleId = ?
");

$update -> bind_param (
    "ii",
    $roleStatus, $_GET["id"]
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
