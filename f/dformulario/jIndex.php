<?php

// module

$module = 'dformulario';
$moduleId =  89;

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';

// select

$_cp = mysqli_query($connection, "
    SELECT * FROM c1
    WHERE c1Status > 0 AND  c1Procesado = 0
");
$_cp2 = mysqli_query($connection, "
    SELECT * FROM c1
    WHERE c1Status > 0 AND c1Procesado = 1
");
$_cp3 = mysqli_query($connection, "
    SELECT * FROM c1
    WHERE c1Status > 0 AND c1Procesado = 1
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/dformulario/jIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/dformulario/jIndex.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/dformulario/jIndex.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/dformulario/jIndex.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/dformulario/jIndex.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/dformulario/jIndex.php';
        break;

    default:
        require_once '../v/dformulario/jIndex.php';
        break;
}
