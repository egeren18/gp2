<?php

// connection

include '../connection.php';

// module

$module = 'cDesk';
$action = 'update';

// var

$cDeskName = filter_var($_POST['cDeskName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE cdesk
    SET
    cDeskName = ?
    WHERE
    cDeskId = ?
");	

$update -> bind_param (
    "si",
    $cDeskName, $_GET["id"]
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
