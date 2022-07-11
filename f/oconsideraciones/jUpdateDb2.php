<?php

// module
$module = 'oconsideraciones';



/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';


//variables obtenidas por GET
$oconsideracionesId = $_GET["cid"];

//variables obtenidas por POST
$rubroId = $_POST['rubroId'];
$titulo = $_POST['titulo'];
$oconsideracionestext = $_POST['oconsideracionesText'];
$oconsideracionestext2 = $_POST['oconsideracionesText2'];

// update

$update = $master -> prepare ("
    UPDATE oconsideraciones
    SET
    rubroId = ?,
    titulo = ?,
    oconsideracionestext = ?,
    oconsideracionestext2 = ?
    WHERE
    oconsideracionesId = ?
");	

$update -> bind_param (
    "isssi",
    $rubroId, $titulo, $oconsideracionestext, $oconsideracionestext2, $_GET["cid"]
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

echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";

    
    
    