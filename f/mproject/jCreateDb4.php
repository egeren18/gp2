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
$mcategoriaId= $_GET["mcategoriaId"];
$etapaId = $_GET["etapaId"];
// metodo utilizado POST. Se utiliza para obtener el valor del input que esta dentro del form debe tener el mismo nombre del name que sale en el input y se ve asi $etapaId = $_POST['etapaId'];
$actividadName = $_POST['actividadName'];
$actividadText = $_POST['actividadText'];



//enviar a base de datos
    $insert = $master -> prepare ("
        INSERT INTO actividad
        (serviceId, mcategoriaId, etapaId, actividadName, actividadText)
        VALUES
        (?,?,?,?,?)
    ");
//enviar con parametros las variables declaradas
    $insert -> bind_param (
        "iiiss",
        $serviceId, $mcategoriaId, $etapaId, $actividadName, $actividadText
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

    echo "<script> window.location='../c/{$module}.php?m=index4&n=added&serviceId={$serviceId}&etapaId={$etapaId}&mcategoriaId={$mcategoriaId}'</script>";


    
