<?php

// connection

include '../connection.php';

// module

$module = 'userSubscriber';
$action = 'delete';

// var

$userStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE user
    SET userStatus = ?
    WHERE userId = ?
");

$update -> bind_param (
    "ii",
    $userStatus, $_GET["uid"]
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["uid"]);

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=user&sid={$_GET["sid"]}&n=deleted'</script>";
