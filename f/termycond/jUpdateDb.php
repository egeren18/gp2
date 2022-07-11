<?php

// module
$module = 'termycond';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// GET
$termycondId = $_GET["termycondId"];
$serviceId = $_GET["serviceId"];
$serviceId = $_GET["clientId"];


// POST
$invoiceDate = $_POST['invoiceDate'];
$quantity = $_POST['quantity'];
$samount = $_POST['samount'];
$scurrencyId = $_POST['scurrencyId'];
$efacturacionId = $_POST['efacturacionId'];

// update

$update = $master -> prepare ("
    UPDATE efacturacion
    SET
    clientId = ?,
    serviceId = ?,
    invoiceDate = ?,
    quantity = ?,
    samount = ?,
    scurrencyId = ?,
    termycondId = ?
    WHERE
    efacturacionId = ?
");	

$update -> bind_param (
    "iisisiii",
    $clientId, $serviceId,  $invoiceDate, $quantity, $samount, $scurrencyId, $termycondId, $efacturacionId
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

echo "<script> window.location='../c/{$module}.php?m=update2&n=&termycondId={$termycondId}&clientId={$clientId}&serviceId={$serviceId}updated'</script>";

    
    
    