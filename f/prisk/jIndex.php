<?php

// module

$module = 'prisk';
$moduleId =  126;

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';

// select

$_cp = mysqli_query($master, "
    SELECT * FROM prisk
    WHERE priskStatus = 1
");
$_cp2 = mysqli_query($master, "
    SELECT * FROM prisk
    WHERE priskStatus = 1
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/prisk/jIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/prisk/jIndex.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/prisk/jIndex.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/prisk/jIndex.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/prisk/jIndex.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/prisk/jIndex.php';
        break;

    default:
        require_once '../v/prisk/jIndex.php';
        break;
}