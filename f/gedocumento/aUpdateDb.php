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
$gedocumentoName = $_POST['gedocumentoName'];
$gedocumentoText = $_POST['gedocumentoText'];

// update

$update = $manuales -> prepare ("
    UPDATE gedocumento
    SET
    gedocumentoName = ?,
    gedocumentoText = ?
    WHERE
    gedocumentoId = ?
");	

$update -> bind_param (
    "ssi",
    $gedocumentoName, $gedocumentoText, $gedocumentoId 
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
