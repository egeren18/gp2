<?php

// connection

include '../connection.php';
include '../connection2.php';

// var

$n = $_GET["n"];





$_client = mysqli_query(
    $master, "
    SELECT * FROM termycond
    INNER JOIN cartypreprojecto ON termycond.termycondId = cartypreprojecto.termycondId
    WHERE termycond.terminado = 1
    AND cartypreprojecto.desicion2 = 2
");




// select
// conexion a tabla 
//se tienen esos filtros para agarra una ac q ya este terminada 
// se debe cambiar esos filtros para q el ac venga por terminos y condiciones 
/*
$_client = mysqli_query(
    $connection, "
    SELECT * FROM ac
    INNER JOIN client ON ac.clientId = client.clientId
    LEFT JOIN tracing
    ON ac.acId = tracing.acId
    LEFT JOIN tracingopinion
    ON ac.acId = tracingopinion.acId
    LEFT JOIN tracingriskpartneropinion
    ON ac.acId = tracingriskpartneropinion.acId
    WHERE ac.acStatus = 1
    AND tracing.term = 2
    AND tracingopinion.decisionS = 2
    AND tracingriskpartneropinion.decision = 2
");
*/
// select
//conexion a tabla
// se llama a servicios para mostrar un despegable con la informacion de dicha tabla
// se debe agregar un filtro q solo te deje escoger el servicio aprobado en terminos y condiciones 
$_service = mysqli_query(
    $master,
    "SELECT * FROM service
    WHERE serviceStatus = 1
");

require_once '../v/project/jAdd.php';
