<?php

// connection

include '../connection.php';

// module

$module = 'notification';
$action = 'update';

// var

$notificationStatus = $_POST['notificationStatus'];

// update

$update = $master -> prepare ("
    UPDATE notification SET
    notificationStatus = ?
    WHERE
    notificationId = ?
");

$update -> bind_param (
    "ii",
    $notificationStatus, $_GET["id"]
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

echo "<script>window.location='../c/{$module}.php?m=index&n=updated'</script>";
