<?php

// module

$module = 'sac';
$moduleId =  111;

// connection

include '../connection.php';
include '../allow.php';

// select
//GET
$tsacId = $_GET["tsacId"];

$_cp = mysqli_query($tipomc, "
    SELECT * FROM tipo_de_cuestionario_$tsacId
    WHERE cuestionarioStatus = 1 
");

$_cp2 = mysqli_query($master, "
    SELECT * FROM tsac
    WHERE tsacId = '" . $tsacId . "'
");

$cp2 = $_cp2 -> fetch_object();
$tsacName = $cp2 -> tsacName;
$date = $cp2 -> date;

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/sac/jList.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/sac/jList.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/sac/jList.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/sac/jList.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/sac/jList.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/sac/jList.php';
        break;

    default:
        require_once '../v/sac/jList.php';
        break;
}