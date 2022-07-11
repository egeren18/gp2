<?php

// module

$module = 'cac';
$moduleId =  112;
// connection
include '../connection.php';
include '../allow.php';

// select
$tsacId = $_GET["tsacId"];
$_cp2 = mysqli_query($master, "
    SELECT * FROM tsac
    WHERE tsacStatus = 1 AND
    tsacId = '" . $tsacId . "'
");
$cp2 = $_cp2 -> fetch_object();
$tsacName = $cp2 -> tsacName ;


//variable importante
$v = $tsacId.'_1';
// tabla 
$_tabla = mysqli_query($tipoc, "
    SELECT * FROM cuestionario$v
    WHERE cacStatus = 1 
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/cac/jGeneral.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/cac/jGeneral.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/cac/jGeneral.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/cac/jGeneral.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/cac/jGeneral.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/cac/jGeneral.php';
        break;

    default:
        require_once '../v/cac/jGeneral.php';
        break;
}