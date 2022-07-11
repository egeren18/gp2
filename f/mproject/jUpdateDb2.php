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
$mcategoriaId = $_GET['mcategoriaId'];
$actividadId = $_GET ['actividadId'];
$actividadText = $_POST["actividadText"];
$actividadName = $_POST["actividadName"];


// update

$update = $master -> prepare ("
    UPDATE actividad
    SET
    actividadText = ?,
    actividadName = ?    
    WHERE
    actividadId = ?
");	

$update -> bind_param (
    "ssi",
    $actividadText, $actividadName, $actividadId
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

echo "<script> window.location='../c/{$module}.php?m=index4&n=updated&serviceId={$serviceId}&etapaId={$etapaId}&mcategoriaId={$mcategoriaId}'</script>";

    
    
    