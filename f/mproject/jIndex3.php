<?php

// module

$module = 'mproject';
$moduleId =  128;

// connection

include '../connection.php';
include '../allow.php';

$serviceId = $_GET['serviceId'];
$etapaId = $_GET['etapaId'];
$mcategoriaId = $_GET['mcategoriaId'];



// select



$_cp = mysqli_query($master, "
    SELECT * FROM mcategoria
    WHERE serviceId = '". $serviceId ."' AND etapaId = '". $etapaId ."'
");
$_cp2 = mysqli_query($master, "
    SELECT * FROM mproject
    WHERE mprojectStatus = 1
");
// la conexion es lo primero que se coloca en este caso $_servicio. En el SELECT se coloca la tabla a la que hare conexion en este caso service y en el WHERE se coloca lo que voy a buscar. 
// en este caso serviceId = '". $serviceId ."'

$_servicio = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '". $serviceId ."'
");

//esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
$servicio = $_servicio -> fetch_object();

//esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$servicioName = $servicio -> serviceName ;

$_etapa = mysqli_query($master, "
    SELECT * FROM etapa
    WHERE etapaId = '". $etapaId ."'
");

$etapa = $_etapa -> fetch_object();

$etapaName = $etapa -> etapaName ;




// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/mproject/jIndex3.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/mproject/jIndex3.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/mproject/jIndex3.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/mproject/jIndex3.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/mproject/jIndex3.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/mproject/jIndex3.php';
        break;

    default:
        require_once '../v/mproject/jIndex3.php';
        break;
}