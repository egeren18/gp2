<?php

// connection

include '../connection.php';

// module

$module = 'subscription';
$action = 'delete';

// var
$subscriptionStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE subscription SET
    subscriptionStatus = ?
    WHERE
    subscriptionId = ?
");

$update -> bind_param (
    "ii",
    $subscriptionStatus, $_GET["id"]
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

echo "<body><script> window.location='../c/{$module}.php?m=index&n=deleted'</script>";
