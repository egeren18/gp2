<?php

// connection

include '../connection.php';
//variables que almacena el serviceId
$serviceId = $_GET["serviceId"];
$etapaId = $_GET["etapaId"];
$mcategoriaId = $_GET["mcategoriaId"];
$actividadId = $_GET["actividadId"];

// access

include '../allow.php';

// select

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

$_actividad = mysqli_query($master, "
    SELECT * FROM actividad
    WHERE actividadId = '". $actividadId ."'
");

//esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
$actividad = $_actividad -> fetch_object();

//esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$actividadText = $actividad -> actividadText ;

$_modelo = mysqli_query($master, "
    SELECT * FROM modelo2
    WHERE modeloStatus = 1
");




// view

require_once '../v/mproject/jCreate5.php';
