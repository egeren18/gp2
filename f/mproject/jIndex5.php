<?php

// module

$module = 'mproject';
$moduleId =  128;

//declarar variables a utilizar
$serviceId = $_GET["serviceId"];
$etapaId = $_GET["etapaId"];
$mcategoriaId = $_GET["mcategoriaId"];
$actividadId = $_GET["actividadId"];

// connection

include '../connection.php';
include '../allow.php';

// select
$_cp = mysqli_query($master, "
    SELECT * FROM mmodelo
    WHERE mmodeloStatus = 1 AND serviceId = '" . $serviceId . "' AND etapaId = '" . $etapaId . "' AND mcategoriaId = '" . $mcategoriaId . "' AND actividadId = '" . $actividadId . "'
");


$_sname = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $serviceId . "'
");

//esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
$sname = $_sname -> fetch_object();
//esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$serviceName = $sname -> serviceName ;

$_etapa = mysqli_query($master, "
    SELECT * FROM etapa
    WHERE etapaId = '". $etapaId ."'
");

//esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
$etapa = $_etapa -> fetch_object();

//esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$etapaName = $etapa -> etapaName ;

$_mcategoria = mysqli_query($master, "
    SELECT * FROM mcategoria
    WHERE mcategoriaId = '". $mcategoriaId ."'
");

//esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
$mcategoria = $_mcategoria -> fetch_object();

//esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$mcategoriaName = $mcategoria -> categoriaText ;

$_actividadName = mysqli_query($master, "
    SELECT * FROM actividad
    WHERE actividadId = '". $actividadId ."'
");

$actividadName = $_actividadName -> fetch_object();

$actividadName = $actividadName -> actividadText ;



// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/mproject/jIndex5.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/mproject/jIndex5.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/mproject/jIndex5.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/mproject/jIndex5.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/mproject/jIndex5.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/mproject/jIndex5.php';
        break;

    default:
        require_once '../v/mproject/jIndex5.php';
        break;
}