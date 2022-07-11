<?php

// module

$module = 'tsac';
$moduleId =  113;

// connection

include '../connection.php';
include '../allow.php';

// select
$id = $_GET["tsacId"];
$_cp = mysqli_query($tipomc, "
    SELECT * FROM tipo_de_cuestionario_$id
    WHERE cuestionarioStatus = 1
");


$_t = mysqli_query($master, "
    SELECT * FROM tsac
    WHERE tsacId = '" . $id . "'
");
$t = $_t -> fetch_object();
$tsacName = $t -> tsacName;

// view
include '../plugins/toast/toast.php';
$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/tsac/jList.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/tsac/jList.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/tsac/jList.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/tsac/jList.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/tsac/jList.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/tsac/jList.php';
        break;

    default:
        require_once '../v/tsac/jList.php';
        break;
}