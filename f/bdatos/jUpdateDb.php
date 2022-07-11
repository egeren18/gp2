<?php

// module
$module = 'bdatos';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';
include '../connection2.php';

// var
$bdatosName = $_POST['d'];
$bdatosText = $_POST['bdatosText'];
$d = date('d-m-y / g:i a');




// update

$update = $master -> prepare ("
    UPDATE bdatos
    SET
    bdatosName = ?,
    bdatosText = ?,
    date = ?
    WHERE
    bdatosId = ?
");	

$update -> bind_param (
    "sssi",
    $bdatosName, $bdatosText, $d, $_GET["cid"]
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

    
    
    