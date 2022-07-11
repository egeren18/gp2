<?php

// connection

include '../connection.php';

// access

include '../allow.php';

//conexion a la tabla cliente dentro de la base de datos

$_g = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $_GET["serviceId"] . "'
    
");


//esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
$g = $_g -> fetch_object();
//esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$serviceName = $g -> serviceName ;
$serviceId = $g -> serviceId ;


//conexion a la tabla cliente dentro de la base de datos

$_eName = mysqli_query($master, "
    SELECT * FROM etapa
    WHERE etapaStatus = 1
    
");

// view

require_once '../v/mproject/jCreate2.php';
