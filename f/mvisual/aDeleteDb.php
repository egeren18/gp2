<?php

// connection

include '../connection.php';

// module

$module = 'mvisual';
$action = 'update';

// var
//GET
$cacId = $_GET['cacId'];
//POSt
$s = 0;
// update

$update = $manuales -> prepare ("
    UPDATE cac
    SET
    cacStatus = ?
    WHERE
    cacId = ?
");	

$update -> bind_param (
    "ii",
    $s , $cacId 
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $cacId );

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
