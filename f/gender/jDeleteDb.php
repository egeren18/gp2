<?php

// connection

include '../connection.php';

// module

$module = 'gender';
$action = 'delete';

// var

$genderStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE gender
    SET
    genderStatus = ?
    WHERE
    genderId = ?
");

$update -> bind_param (
    "ii",
    $genderStatus, $_GET["id"]
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
