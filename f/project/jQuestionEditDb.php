<?php

// connection

include '../connection.php';

// module

$module = 'project';
$action = 'frecuenciaP';

$projectId = $_GET["c"];
$i = $_GET["i"];

$clientId = 1;
$subscriberId = 1;
$frecuencia = $_POST['frecuencia'];
$frecuenciaName = $_POST['frecuencia'];

$dateP1 = $_POST['dateP1'];
$dateP2 = $_POST['dateP2'];
$dateP3 = $_POST['dateP3'];
$dateP4 = $_POST['dateP4'];
$dateP5 = $_POST['dateP5'];
$dateP6 = $_POST['dateP6'];

$dateP7 = $_POST['dateP7'];
$dateP8 = $_POST['dateP8'];
$dateP9 = $_POST['dateP9'];
$dateP10 = $_POST['dateP10'];
$dateP11 = $_POST['dateP11'];
$dateP12 = $_POST['dateP12'];
    
// update
$update = $master -> prepare ("
    UPDATE frecuencia
    SET
    frecuencia = ?,
    frecuenciaName = ?,
    dateP1 = ?,
    dateP2 = ?,
    dateP3 = ?,
    dateP4 = ?,
    dateP5 = ?,
    dateP6 = ?,
    dateP7 = ?,
    dateP8 = ?,
    dateP9 = ?,
    dateP10 = ?,
    dateP11 = ?,
    dateP12 = ?
    WHERE
    projectId = ?
");	

$update -> bind_param (
    "ssssssssssssssi",
    $frecuencia, $frecuenciaName, $dateP1, $dateP2, $dateP3, $dateP4, $dateP5, $dateP6,
    $dateP7, $dateP8, $dateP9, $dateP10, $dateP11, $dateP12,  $projectId
);

$update -> execute();




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

    echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$projectId}&i={$i}'</script>";
    
    
    
    
    

