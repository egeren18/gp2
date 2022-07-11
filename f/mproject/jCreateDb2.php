<?php

// connection

include '../connection.php';

// module

$module = 'mproject';
$action = 'add';
//declarar variables que se van a utilizar.

// var

// Metodo GET se usa para obtener informacion enviada en el form y se ve de esta forma $serviceId = $_GET["serviceId"]; 
$serviceId = $_GET["serviceId"];
// metodo utilizado POST. Se utiliza para obtener el valor del input que esta dentro del form debe tener el mismo nombre del name que sale en el input y se ve asi $etapaId = $_POST['etapaId'];
$etapaId = $_POST['etapaId'];




//enviar a base de datos
    $insert = $master -> prepare ("
        INSERT INTO etapas
        (serviceId, etapaId)
        VALUES
        (?,?)
    ");
//enviar con parametros las variables declaradas
    $insert -> bind_param (
        "ii",
        $serviceId, $etapaId
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

    echo "<script> window.location='../c/{$module}.php?m=index2&n=added&cid={$serviceId}'</script>";


    
