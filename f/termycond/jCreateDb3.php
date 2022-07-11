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
$iid = $_GET["iid"];
// POST
$roleId = $_POST['roleId'];
$lineId = $_POST['lineId'];
$hour = $_POST['hour'];
$amount = $_POST['amount'];



//enviar a base de datos
    $insert = $master -> prepare ("
        INSERT INTO rolproyecto
        (clientId, serviceId, roleId, lineId, hour, amount, termycondId)
        VALUES
        (?,?,?,?,?,?,?)
    ");
//enviar con parametros las variables declaradas
    $insert -> bind_param (
        "iiiisii",
        $clientId, $serviceId, $roleId, $lineId, $hour, $amount, $termycondId
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

    echo "<script> window.location='../c/{$module}.php?m=create2&n=added&termycondId={$termycondId}&iid=3'</script>";


    
