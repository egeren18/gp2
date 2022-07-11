<?php

// connection

include '../connection.php';

// module

$module = 'mproject';
$action = 'add';
//declarar variables que se van a utilizar 
// var
$serviceId = $_POST['serviceId'];
$eName = $_POST['eName'];



//enviar a base de datos
    $insert = $master -> prepare ("
        INSERT INTO mproject
        (serviceId)
        VALUES
        (?)
    ");
//enviar con parametros las variables declaradas
    $insert -> bind_param (
        "i",
        $serviceId
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

    echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";


    
