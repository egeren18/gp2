<?php

// module

$module = 'termycond';
$moduleId =  29;

// connection

include '../connection.php';
include '../allow.php';

// select

$_cp = mysqli_query($master, "
    SELECT * FROM termycond
    WHERE termycondStatus = 1
");
$_cp2 = mysqli_query($master, "
    SELECT * FROM termycond
    WHERE termycondStatus = 1
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/termycond/jIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/termycond/jIndex.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/termycond/jIndex.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/termycond/jIndex.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/termycond/jIndex.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/termycond/jIndex.php';
        break;

    default:
        require_once '../v/termycond/jIndex.php';
        break;
}