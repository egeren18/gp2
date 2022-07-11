<?php

// connection

include '../connection.php';


// access

include '../allow.php';

// select

$_servicio = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $_GET['serviceId'] . "'
 ");
 
 //esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
$servicio = $_servicio -> fetch_object();
//esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$servicioName = $servicio -> serviceName ;



// select

$_etapa = mysqli_query($master, "
    SELECT * FROM etapa
    WHERE etapaId = '" . $_GET["etapaId"] . "'
  ");
  
$etapa = $_etapa -> fetch_object();

$etapaName = $etapa -> etapaName ;


// view

require_once '../v/mproject/jCreate3.php';
