<?php

// module
$module = 'tsac';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

$tsacId = $_GET["tsacId"];
$cuestionarioId = $_GET["cuestionarioId"];

$v = $tsacId.'_'.$cuestionarioId; 

foreach ($_POST['serviceC'] as $key => $value) {

 $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
        
    $update = $tipos -> prepare ("
    UPDATE cuestionario$v
    SET
    access = ?
    WHERE
    serviceId = ?
");	

$update -> bind_param (
    "ii",
    $jAccess, $value
);

$update -> execute();

    }

// view

echo "<script> window.location='../c/{$module}.php?m=list&n=updated&tsacId={$tsacId}'</script>";
