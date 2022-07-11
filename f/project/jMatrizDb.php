<?php

// connection

include '../connection.php';
include '../connection2.php';
// module

$module = 'project';
$action = 'frecuenciaP';

$i = $_GET["i"];
$projectId = $_GET["c"];
$c = $_GET["c"];

$origenId = $_POST['origenId'];
$objetivosN = $_POST['objetivosN'];

$riesgoN = $_POST['riesgoN'];
$riesgoC = $_POST['riesgoC'];

$controlG = $_POST['controlG'];
$informacionF = $_POST['informacion'];

$enfoqueA = $_POST['enfoqueA'];
$emisionI = $_POST['emisionI'];

    
// insert


    $insert = $connection -> prepare ("
        INSERT INTO matriz
        (origenId, objetivosN, riesgoN, riesgoC, controlG, informacionF, enfoqueA, emisionI, projectId )
        VALUES
        (?,?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "ssiiiiisi",
        $origenId, $objetivosN, $riesgoN, $riesgoC, $controlG , $informacionF, $enfoqueA, $emisionI, $c
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

    echo "<script> window.location='../c/{$module}.php?m=question&p=s&c={$c}&i={$i}'</script>";
    
    