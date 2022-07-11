<?php

// connection

include '../connection.php';
include '../connection2.php';

// module

$module = 'termycond';
$action = 'add';
//declarar variables que se van a utilizar 
// GET
$termycondId = $_GET["termycondId"];


// POST
$frecuencia = $_POST['frecuencia'];

//enviar a base de datos
    $insert = $connection -> prepare ("
        INSERT INTO frecuencia
        (termycondId, frecuencia)
        VALUES
        (?,?)
    ");
//enviar con parametros las variables declaradas
    $insert -> bind_param (
        "ii",
        $termycondId, $frecuencia
    );


    $insert -> execute();
    
        echo "<script> window.location='../c/{$module}.php?m=create2&n=added&termycondId={$termycondId}&iid=2'</script>";