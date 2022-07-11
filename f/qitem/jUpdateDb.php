<?php

// connection

include '../connection.php';
// module

$module = 'qitem';
$action = 'update';

// var
$id = $_GET["cid"];
$qitemNameM = filter_var($_POST['qitemNameM'], FILTER_SANITIZE_STRING);
$itemName = $_POST['itemName'];
$itemArea = $_POST['itemArea'];

// update
$id = $_GET["pid"];
$update = $master -> prepare ("
    UPDATE qitem
    SET
    qitemNameM = ?,
    itemName = ?,
    itemArea = ?
    WHERE
    qitemId = ?
");	

$update -> bind_param (
    "ssii",
    $qitemNameM, $itemName, $itemArea , $_GET["cid"]
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["cid"]);

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=list&n=updated&pid={$id}'</script>";
