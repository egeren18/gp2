<?php

// module

$module = 'mproject';
$moduleId =  128;

// connection

include '../connection.php';
include '../allow.php';

//var
$serviceId = $_GET["cid"];

// select

$_cp = mysqli_query($master, "
    SELECT * FROM etapa
    WHERE etapaStatus = 1
");

$_sname = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $_GET["cid"] . "'
");

//esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
$sname = $_sname -> fetch_object();
//esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$serviceName = $sname -> serviceName ;


// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/mproject/jIndex2.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/mproject/jIndex2.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/mproject/jIndex2.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/mproject/jIndex2.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/mproject/jIndex2.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/mproject/jIndex2.php';
        break;

    default:
        require_once '../v/mproject/jIndex2.php';
        break;
}