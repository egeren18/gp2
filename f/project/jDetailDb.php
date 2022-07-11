<?php

// connection

include '../connection.php';
include '../connection2.php';

// var

$acId = $_POST["acId"];
$clientId = $_POST["clientId"];
$serviceId = $_POST["serviceId"];
$projectDateStart = $_POST["projectDateStart"];
$projectDateExpire = $_POST["projectDateExpire"];
$projectStatus = $_POST["projectStatus"];

// insert
// insertar en la base de datos de suscritores 
// con esto se empieza el proyecto 
// aqui se manda el id de ac para el project
$insert = $connection -> prepare("INSERT INTO project (acId, clientId, serviceId, projectDateStart, projectDateExpire, projectStatus) VALUES (?,?,?,?,?,?)");
$insert -> bind_param("iiissi", $acId, $clientId, $serviceId, $projectDateStart, $projectDateExpire, $projectStatus);
$insert -> execute();
$p = $connection -> insert_id;

// select
// conxion en la q cuento cuantas preguntas tiene el cuestionario
// esto es un contador para determinar cuantas vueltas dara el for 
$qty = mysqli_query($master, "SELECT COUNT(*) total FROM qplanning WHERE itemStatus = 1");
$r_qty = $qty -> fetch_object();
$t = $r_qty -> total;

// insert
//el for q llenara en la base de datos del suscritor con referencia a proyectos 
// CON ESTO SE DEJARAN LOS ESPACIOS VACIOS donde se almacenaran las respuestas 
for ($i = 1; $i <= $t; $i++) {

    $newPlanning = $connection -> prepare("INSERT INTO projectplanninganswer (projectId, projectIId) VALUES (?,?)");
    $newPlanning -> bind_param("ii", $p, $i);
    $newPlanning -> execute();

}

// select
// conxion en la q cuento cuantas preguntas tiene el cuestionario
// esto es un contador para determinar cuantas vueltas dara el for 
$qty = mysqli_query($master, "SELECT COUNT(*) total FROM qstrategy WHERE itemStatus = 1");
$r_qty = $qty -> fetch_object();
$t = $r_qty -> total;

// insert
//el for q llenara en la base de datos del suscritor con referencia a proyectos 
// CON ESTO SE DEJARAN LOS ESPACIOS VACIOS donde se almacenaran las respuestas 
for ($i = 1; $i <= $t; $i++) {

    $newStrategy = $connection -> prepare(" INSERT INTO projectstrategyanswer (projectId, projectIId) VALUES (?,?)");
    $newStrategy -> bind_param("ii", $p, $i);
    $newStrategy -> execute();

}

// select
// conxion en la q cuento cuantas preguntas tiene el cuestionario
// esto es un contador para determinar cuantas vueltas dara el for 
$qty = mysqli_query($master, "SELECT COUNT(*) total FROM qexecution WHERE itemStatus = 1");
$r_qty = $qty -> fetch_object();
$t = $r_qty -> total;

// insert
//el for q llenara en la base de datos del suscritor con referencia a proyectos 
// CON ESTO SE DEJARAN LOS ESPACIOS VACIOS donde se almacenaran las respuestas 
for ($i = 1; $i <= $t; $i++) {

    $newExecution = $connection -> prepare("INSERT INTO projectexecutionanswer (projectId, projectIId) VALUES (?,?)");
    $newExecution -> bind_param("ii", $p, $i);
    $newExecution -> execute();

}

// select
// conxion en la q cuento cuantas preguntas tiene el cuestionario
// esto es un contador para determinar cuantas vueltas dara el for 
$qty = mysqli_query($master, "SELECT COUNT(*) total FROM qconclusion WHERE itemStatus = 1");
$r_qty = $qty -> fetch_object();
$t = $r_qty -> total;

// insert
//el for q llenara en la base de datos del suscritor con referencia a proyectos 
// CON ESTO SE DEJARAN LOS ESPACIOS VACIOS donde se almacenaran las respuestas 
for ($i = 1; $i <= $t; $i++) {

    $newConclusion = $connection -> prepare("INSERT INTO projectconclusionanswer (projectId, projectIId) VALUES (?,?)");
    $newConclusion -> bind_param("ii", $p, $i);
    $newConclusion -> execute();

}

// trace
// la traza 
$userId = $_SESSION["userId"];
$module = 'Project';
$action = 'Add';
$itemId = $projectId;

// insert

$trace = $connection -> prepare ("INSERT INTO trace (userId, module, action, itemId) VALUES (?,?,?,?)");
$trace -> bind_param ("issi", $userId, $module, $action, $itemId);
$trace -> execute();

// view

echo "<script> window.location='../c/project.php?m=projectTeam&p=" . $p . "'</script>";
