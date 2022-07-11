<?php

// connection

include '../connection.php';

// module

$module = 'mvisual';
$action = 'update';

// var
//GET
$mvisualId = $_GET['mvisualId'];
$cacId = $_GET['cacId'];
//POSt
$s = 0;
// update

$update = $manuales -> prepare ("
    UPDATE mvisual
    SET
    mvisualStatus = ?
    WHERE
    mvisualId = ?
");	

$update -> bind_param (
    "ii",
    $s , $mvisualId 
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

echo "<script> window.location='../c/{$module}.php?m=index&n=updated&cacId={$cacId}'</script>";
