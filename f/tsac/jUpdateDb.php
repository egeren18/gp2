<?php

// module
$module = 'tsac';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

$tsacId = $_GET["tsacId"];
$tsacName = $_POST["tsacName"];
$date = date('d-m-y / g:i a');

    $update = $master -> prepare ("
    UPDATE tsac
    SET
    tsacName = ?,
    date = ?
    WHERE
    tsacId = ?
");	

$update -> bind_param (
    "ssi",
    $tsacName,$date, $tsacId
);

$update -> execute();


// view

echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
