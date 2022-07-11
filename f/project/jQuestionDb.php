<?php

// connection

include '../connection.php';

// module

$module = 'project';
$action = 'frecuenciaP';

$clientId = 1;
$subscriberId = 1;
$projectId =1;
$frecuencia = $_POST['frecuencia'];
$frecuenciaName = $_POST['frecuencia'];
    
// insert


    $insert = $master -> prepare ("
        INSERT INTO frecuencia
        (subscriberId, clientId, projectId, frecuencia, frecuenciaName)
        VALUES
        (?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiss",
        $subscriberId, $clientId, $projectId, $frecuencia, $frecuenciaName
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
    
    
    
    
    