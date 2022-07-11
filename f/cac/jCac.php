<?php

// module

$module = 'cac';
$moduleId =  112;
// connection
include '../connection.php';
include '../allow.php';

// select
$tsacId = $_GET["tsacId"];
$cuestionarioId = $_GET["cuestionarioId"];
$_cp2 = mysqli_query($master, "
    SELECT * FROM tsac
    WHERE tsacStatus = 1 AND
    tsacId = '" . $tsacId . "'
");
$cp2 = $_cp2 -> fetch_object();
$tsacName = $cp2 -> tsacName ;


$_cp = mysqli_query($tipomc, "
    SELECT * FROM tipo_de_cuestionario_$tsacId
    WHERE cuestionarioId = '" . $cuestionarioId . "'
");
$cp = $_cp -> fetch_object();
$cuestionarioName = $cp -> cuestionarioName;

//variable importante
$v = $tsacId.'_'.$cuestionarioId;
// tabla 
$_tabla = mysqli_query($tipoc, "
    SELECT * FROM cuestionario$v
    WHERE cacStatus = 1 and access = 1
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/cac/jCac.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/cac/jCac.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/cac/jCac.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/cac/jCac.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/cac/jCac.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/cac/jCac.php';
        break;

    default:
        require_once '../v/cac/jCac.php';
        break;
}