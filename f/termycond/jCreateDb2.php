<?php

// connection

include '../connection.php';

// module

$module = 'termycond';
$action = 'add';
//declarar variables que se van a utilizar 
// GET
$termycondId = $_GET["termycondId"];
$serviceId = $_GET["serviceId"];
$clientId = $_GET["clientId"];

// POST
$invoiceDate = $_POST['invoiceDate'];
$quantity = $_POST['quantity'];
$samount = $_POST['samount'];
$scurrencyId = $_POST['scurrencyId'];




//enviar a base de datos
    $insert = $master -> prepare ("
        INSERT INTO efacturacion
        (clientId, serviceId, invoiceDate, quantity, samount, scurrencyId, termycondId)
        VALUES
        (?,?,?,?,?,?,?)
    ");
//enviar con parametros las variables declaradas
    $insert -> bind_param (
        "iissiii",
        $clientId, $serviceId, $invoiceDate, $quantity, $samount, $scurrencyId, $termycondId
    );


    $insert -> execute();
    
    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();
    
    

    // view

    echo "<script> window.location='../c/{$module}.php?m=create2&n=added&termycondId={$termycondId}&iid=4'</script>";


    
