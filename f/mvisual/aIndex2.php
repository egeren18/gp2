<?php

// module

$module = 'mvisual';
$moduleId =  124;

// connection

include '../connection.php';
include '../allow.php';

// select
$_cca = mysqli_query($manuales, "
    SELECT * FROM cac
    WHERE cacId = '" . $_GET["cacId"] . "'
");
$cca = $_cca -> fetch_object();
$ccaName = $cca -> cacName;


$_tabla = mysqli_query($manuales, "
    SELECT * FROM mvisual
    WHERE cacId = '" . $_GET["cacId"] . "'
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/mvisual/aIndex2.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/mvisual/aIndex2.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/mvisual/aIndex2.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/mvisual/aIndex2.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/mvisual/aIndex2.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/mvisual/aIndex2.php';
        break;

    default:
        require_once '../v/mvisual/aIndex2.php';
        break;
}