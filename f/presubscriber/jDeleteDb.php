<?php

// connection

include '../connection.php';

// module

$module = 'subscriber';
$action = 'delete';

// var

$subscriberStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE subscriber SET
    subscriberStatus = ?
    WHERE
    subscriberId = ?
");

$update -> bind_param (
    "ii",
    $subscriberStatus, $_GET["id"]
);

$update -> execute();

$userStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE user
    SET userStatus = ?
    WHERE subscriberId = ?
");

$update -> bind_param (
    "ii",
    $userStatus, $_GET["id"]
);

$update -> execute();

// delete

$delete = $master -> prepare ("
    DELETE FROM access
    WHERE subscriberId = '" . $_GET["id"] . "'
");

$delete -> execute();

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
