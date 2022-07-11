<?php

// module

$module = 'pac';
$moduleId =  113;

// connection

include '../connection.php';
include '../allow.php';

// select

$tsacId = 1;

$_tsacn = mysqli_query($master, "
    SELECT * FROM tsac
    WHERE tsacId = '" . $tsacId .  "'
");
$tsacn = $_tsacn -> fetch_object();
$tsacName  = $tsacn -> tsacName;
$tdate  = $tsacn -> date;

$_cp = mysqli_query($tipomc, "
    SELECT * FROM tipo_de_cuestionario_$tsacId
");
// view




include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/pac/jIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/pac/jIndex.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/pac/jIndex.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/pac/jIndex.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/pac/jIndex.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/pac/jIndex.php';
        break;

    default:
        require_once '../v/pac/jIndex.php';
        break;
}