<?php

// module

$module = 'desk';
$moduleId =  114;
// connection
include '../connection.php';
include '../allow.php';

// select

$_cp = mysqli_query($master, "
    SELECT * FROM module
    WHERE cDeskId = '" . $_GET["pid"] . "'  AND
    moduleStatus = 1
");
$_cp2 = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
");
$_cp3 = mysqli_query($master, "
    SELECT * FROM cdesk
    WHERE cDeskId = '" . $_GET["pid"] . "' 
");
$cp3 = $_cp3 -> fetch_object();
$dname = $cp3 -> cDeskName ;
// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/desk/jList.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/desk/jList.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/desk/jList.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/desk/jList.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/desk/jList.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/desk/jList.php';
        break;

    default:
        require_once '../v/desk/jList.php';
        break;
}