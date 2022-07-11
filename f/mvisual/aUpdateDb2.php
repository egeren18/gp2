<?php

// connection

include '../connection.php';

// module

$module = 'mvisual';
$action = 'update';

// var
//GET
$cacId = $_GET['cacId'];
$mvisualId = $_GET['mvisualId'];
//POSt
$mvisualName = $_POST['mvisualName'];
$mvisualText = $_POST['mvisualText'];
$mvisualText2 = $_POST['mvisualText2'];
$mvisualText3 = $_POST['mvisualText3'];

// update

$update = $manuales -> prepare ("
    UPDATE mvisual
    SET
    mvisualName = ?,
    mvisualText = ?,
    mvisualText2 = ?,
    mvisualText3 = ?
    WHERE
    mvisualId = ?
");	

$update -> bind_param (
    "ssssi",
    $mvisualName, $mvisualText, $mvisualText2, $mvisualText3, $mvisualId 
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $mvisualId );

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=index2&n=updated&cacId={$cacId}'</script>";
