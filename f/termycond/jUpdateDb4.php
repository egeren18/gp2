<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables.
 */
$termycondId = $_GET["termycondId"];
$serviceId = $_GET["serviceId"];
$clientId = $_GET["clientId"];
if (isset($_POST['approved']) && $_POST['approved'] == TRUE) {
echo    $statusId = $_POST['approved'];
}
else {
echo     $statusId = 2;
}

//$note = filter_input(INPUT_POST, 'note', FILTER_SANITIZE_STRING);

        
/*
 * Actualiza un registro en la base de datos.
 */

$update = $connection -> prepare("UPDATE termycond SET statusId = ? WHERE termycondId = ? AND mId = 4");
$update -> bind_param("ii", $statusId, $termycondId);
$update -> execute();


    // view

    echo "<script> window.location='../c/termycond.php?m=list&n=update&cid={$termycondId}&iid=1&clientId={$clientId}&serviceId={$serviceId}'</script>";