<?php

// module
$module = 'prisk';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';
include '../connection2.php';

// var
$priskName = $_POST['d'];
$priskText = $_POST['priskText'];
$d = date('d-m-y / g:i a');




// update

$update = $master -> prepare ("
    UPDATE prisk
    SET
    priskName = ?,
    priskText = ?,
    date = ?
    WHERE
    priskId = ?
");	

$update -> bind_param (
    "sssi",
    $priskName, $priskText, $d, $_GET["cid"]
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
$id = $_GET["cid"];
         

// view

echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";

    
    
    