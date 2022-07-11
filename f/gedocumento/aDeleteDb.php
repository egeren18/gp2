<?php

// connection

include '../connection.php';

// module

$module = 'gedocumento';
$action = 'update';

// var
//GET
$gedocumentoId = $_GET['gedocumentoId'];
//POSt
$s = 0;
// update

$update = $manuales -> prepare ("
    UPDATE gedocumento
    SET
    gedocumentoStatus = ?
    WHERE
    gedocumentoId = ?
");	

$update -> bind_param (
    "ii",
    $s , $gedocumentoId 
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $gedocumentoId );

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
