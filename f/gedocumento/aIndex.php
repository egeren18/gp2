<?php

// module

$module = 'gedocumento';
$moduleId =  123;

// connection

include '../connection.php';
include '../allow.php';

// select

$_tabla = mysqli_query($manuales, "
    SELECT * FROM gedocumento
    WHERE gedocumentoStatus = 1
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/gedocumento/aIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/gedocumento/aIndex.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/gedocumento/aIndex.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/gedocumento/aIndex.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/gedocumento/aIndex.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/gedocumento/aIndex.php';
        break;

    default:
        require_once '../v/gedocumento/aIndex.php';
        break;
}