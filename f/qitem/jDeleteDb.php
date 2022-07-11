<?php
$module = 'qitem';
$action = 'delete';

// connection

include '../connection.php';


// var

$clientId = $_GET["pid"];
$Id = $_GET["cid"];
$clientStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE qitem
    SET
    qitemStatus = ?
    WHERE
    qitemId = ?
");

$update -> bind_param (
    "ii",
    $clientStatus, $clientId
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["pid"]);

$trace -> execute();
// view

echo "<script> window.location='../c/qitem.php?m=index&n=deleted&pid={$id}'</script>";
