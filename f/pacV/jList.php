<?php

// module

$module = 'pac';
$moduleId =  113;

// connection

include '../connection.php';
include '../allow.php';

// select
$serviceId = $_GET["pid"];


$sMrer = "localhost";
$uMrer = "sagracom_crear";
$pMrer = "Sagra2507.";
$dMrer = 'sagracom_modelos_cuestionarios';
$rer = new mysqli($sMrer, $uMrer, $pMrer, $dMrer);
 
$_cp = mysqli_query($rer, "
    SELECT * FROM m$serviceId
    WHERE pacStatus = 1 
    
");
$_cp2 = mysqli_query($master, "
    SELECT * FROM pac
    WHERE serviceStatus = 1
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/pac/jList.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/pac/jList.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/pac/jList.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/pac/jList.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/pac/jList.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/pac/jList.php';
        break;

    default:
        require_once '../v/pac/jList.php';
        break;
}