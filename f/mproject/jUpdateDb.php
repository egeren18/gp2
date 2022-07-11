<?php

// module
$module = 'mproject';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$serviceId = $_GET['serviceId'];
$etapaId = $_GET['etapaId'];
$categoriaText = $_POST["categoriaText"];
$mcategoriaId = $_GET['mcategoriaId'];
// update

$update = $master -> prepare ("
    UPDATE mcategoria
    SET
    categoriaText = ?
    WHERE
    mcategoriaId = ?
");	

$update -> bind_param (
    "si",
    $categoriaText, $mcategoriaId
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

echo "<script> window.location='../c/{$module}.php?m=index3&n=updated&serviceId={$serviceId}&etapaId={$etapaId}'</script>";

    
    
    