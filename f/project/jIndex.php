<?php

// connection

include '../connection.php';
include '../connection2.php';

// var
//coño esto me gustaria q tenga el nombre q es (no entiendo por q le pusieron uid)
$uid = $_SESSION["userId"];

// select
// conexion a la tabla para mostrar en la visual del index 
$_project = mysqli_query($connection, "SELECT * FROM project WHERE projectStatus = 1");
//$_project = mysqli_query($connection, "SELECT * FROM project INNER JOIN client ON project.clientId = client.clientId LEFT JOIN service ON project.serviceId = service.serviceId");

// notify

include '../plugins/toast/toast.php';

$n = $_GET["n"];
// el  switch q me mostrara el mensaje dependiendo q coño haga 
switch ($n) {

    case 'created':
        echo $created;
        require_once '../v/project/jIndex.php';
        break;

    case 'deniedProject':
        echo $deniedProject;
        require_once '../v/project/jIndex.php';
        break;
    
    case 'validProject':
        echo $validProyect;
        require_once '../v/project/jIndex.php';
        break;
    
    default:
        require_once '../v/project/jIndex.php';
        break;

}
