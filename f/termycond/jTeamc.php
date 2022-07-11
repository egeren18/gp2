<?php

// connection

include '../connection.php';
include '../connection2.php';

// module

$module = 'termycond';
$action = 'add';
//declarar variables que se van a utilizar 
// var

$clientId = $_GET['clientId'];
$serviceId = $_GET['serviceId'];
$termycondId = $_GET['termycondId'];

$userId = $_POST['userId'];
$designatedId = $_POST['designatedId'];

    //enviar a base de datos
    $insert = $connection -> prepare ("
        INSERT INTO tteam
        (termycondId, userId, designatedId)
        VALUES
        (?,?,?)
    ");
//enviar con parametros las variables declaradas
    $insert -> bind_param (
        "iii",
        $termycondId, $userId, $designatedId
    );

$insert -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=team&n=added&cid={$termycondId}&clientId={$clientId}&serviceId={$serviceId}'</script>";