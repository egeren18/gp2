<?php

// connection

include '../connection.php';
include '../connection2.php';
//conexion a la tabla cliente dentro de la base de datos


$_client = mysqli_query(
    $connection, "
    SELECT * FROM ac
    INNER JOIN client ON ac.clientId = client.clientId
    INNER JOIN tracingopinion
    ON ac.acId = tracingopinion.acId
    WHERE ac.acStatus = 1
    AND tracingopinion.decisionSr = 2
");


$_g = mysqli_query($master, "
    SELECT * FROM client
    WHERE clientStatus = 1
    
");

$_g = mysqli_query($master, "
    SELECT * FROM client
    WHERE clientStatus = 1
    
");


//conexion a la tabla servicios dentro de la base de datos

$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceStatus = 1
    
");

//conexion a la tabla usuarios dentro de la base de datos

$_user = mysqli_query($master, "
    SELECT * FROM user
where subscriberId = 2
    
");

//conexion a la tabla usuarios 2 dentro de la base de datos

$_user2 = mysqli_query($master, "
    SELECT * FROM user
    where subscriberId = 2
    
");



// view

require_once '../v/termycond/jCreate.php';
