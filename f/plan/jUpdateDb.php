<?php

// connection

include '../connection.php';

// module

$module = 'plan';
$action = 'update';

// var
$planName = $_POST['planName'];
$monto = $_POST['monto'];
$text1 = $_POST['text1'];
$text2 = $_POST['text2'];
$text3 = $_POST['text3'];
$text4 = $_POST['text4'];
// update

$update = $master -> prepare ("
    UPDATE plan
    SET
    planName = ?,
    monto = ?,
    text1 = ?,
    text2 = ?,
    text3 = ?,
    text4 = ?
    WHERE
    planId = ?
");	

$update -> bind_param (
    "sissssi",
    $planName, $monto, $text1, $text2, $text3, $text4, $_GET["id"]
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
