<?php

// module

$module = 'cac';
$moduleId =  112;
// connection
include '../connection.php';
include '../allow.php';

// select
$tsacId = $_GET["tsacId"];
$_cp = mysqli_query($tipomc, "
    SELECT * FROM tipo_de_cuestionario_$tsacId
    WHERE cuestionarioStatus = 1
");

$_cp2 = mysqli_query($master, "
    SELECT * FROM tsac
    WHERE tsacStatus = 1 AND
    tsacId = '" . $tsacId . "'
");
$cp2 = $_cp2 -> fetch_object();
$tsacName = $cp2 -> tsacName ;

$_cp3 = mysqli_query($master, "
    SELECT * FROM modelo
    WHERE modeloId = '" . $_GET["pid"] . "' 
");
$cp3 = $_cp3 -> fetch_object();
$dname = $cp3 -> modeloName ;
// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/cac/jList.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/cac/jList.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/cac/jList.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/cac/jList.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/cac/jList.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/cac/jList.php';
        break;

    default:
        require_once '../v/cac/jList.php';
        break;
}