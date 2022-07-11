<?php

// module

$module = 'qitem';
$moduleId =  93;
// connection
include '../connection.php';
include '../allow.php';

// select
$quest = $_GET["pid"];
$_cp = mysqli_query($master, "
    SELECT * FROM qitem
    WHERE questId = '" . $_GET["pid"] . "'  AND
    itemStatus = 1
");
$_cp2 = mysqli_query($master, "
    SELECT * FROM qitem
    WHERE itemStatus = 1
");
$_cp3 = mysqli_query($master, "
    SELECT * FROM quest
    WHERE questId = '" . $_GET["pid"] . "' 
");
$cp3 = $_cp3 -> fetch_object();
$questName = $cp3 -> questName ;
// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/qitem/jList.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/qitem/jList.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/qitem/jList.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/qitem/jList.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/qitem/jList.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/qitem/jList.php';
        break;

    default:
        require_once '../v/qitem/jList.php';
        break;
}