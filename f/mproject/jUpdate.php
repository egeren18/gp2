<?php

// connection

include '../connection.php';
include '../allow.php';





// select


$_categoria = mysqli_query($master, "
    SELECT * FROM mcategoria
    WHERE mcategoriaId = '" . $_GET['mcategoriaId'] . "'
");

//esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
$categoria = $_categoria -> fetch_object();

//esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$categoriaText = $categoria -> categoriaText ;

$_etapa = mysqli_query($master, "
    SELECT * FROM etapa
    WHERE etapaId = '" . $_GET['etapaId'] . "'
");

//esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
$etapa = $_etapa -> fetch_object();

//esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$etapaName = $etapa -> etapaName ;

$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $_GET['serviceId'] . "'
");

//esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
$service = $_service -> fetch_object();

//esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$serviceName = $service -> serviceName ;




// view

require_once '../v/mproject/jUpdate.php';