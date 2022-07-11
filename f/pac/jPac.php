<?php

// module

$module = 'pac';
$moduleId =  113;

// connection

include '../connection.php';
include '../allow.php';

// select
$tsacId = $_GET["tsacId"];
$cuestionarioId =$_GET["cuestionarioId"];

$_tsacn = mysqli_query($master, "
    SELECT * FROM tsac
    WHERE tsacId = '" . $tsacId .  "'
");
$tsacn = $_tsacn -> fetch_object();
$tsacName  = $tsacn -> tsacName;

$_cuestionarion = mysqli_query($tipomc, "
    SELECT * FROM tipo_de_cuestionario_$tsacId
    WHERE cuestionarioId = '" . $cuestionarioId .  "'
");
$cuestionarion = $_cuestionarion -> fetch_object();
$cuestionarioName  = $cuestionarion -> cuestionarioName;

$v =$tsacId.'_'.$cuestionarioId;
$_tabla = mysqli_query($tipod, "
    SELECT * FROM cuestionario$v where access = 1 and  pacStatus = 1
");



// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/pac/jPac.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/pac/jPac.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/pac/jPac.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/pac/jPac.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/pac/jPac.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/pac/jPac.php';
        break;

    default:
        require_once '../v/pac/jPac.php';
        break;
}