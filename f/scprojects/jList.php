<?php

// module

$module = 'scprojects';
$moduleId =  111;

// connection

include '../connection.php';
include '../allow.php';

// select
//GET
$cid = $_GET["cid"];

$_cp2 = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $cid . "' 
");
$cp2 = $_cp2 -> fetch_object();
$serviceName = $cp2 -> serviceName;

$_cp = mysqli_query($app, "
    SELECT * FROM project
    WHERE serviceId = '" . $cid . "' and version >= 1
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/scprojects/jList.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/scprojects/jList.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/scprojects/jList.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/scprojects/jList.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/scprojects/jList.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/scprojects/jList.php';
        break;

    default:
        require_once '../v/scprojects/jList.php';
        break;
}