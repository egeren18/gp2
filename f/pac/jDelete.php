<?php

// connection

include '../connection.php';
// var

// select
//GET
$tsacId = $_GET["tsacId"];
$cuestionarioId = 1;
$mId = $_GET["mId"];
$g = $_GET["g"];
//CONEXION A BASE DE DATOS 

$v =$tsacId.'_'.$cuestionarioId;
//CONEXION A BASE DE DATOS 
 $_lma = mysqli_query($tipod, "
            SELECT * FROM cuestionario$v
            WHERE mId = '". $mId ."'
        ");        
// hare un wil para generar de manera automatica los modales de edicion 
$m = $_lma -> fetch_object();
$pacName = $m -> pacName;
$pap = $m -> pap;
$mId = $m -> mId;
$date = $m -> date;
$cacId = $m -> cacId;
$risk = $m -> risk;

$_country2 = mysqli_query($tipoc, "
    SELECT * FROM cuestionario$v
    WHERE cacId = '" . $cacId . "'
    ");
// declarar la llave
$country = $_country2 -> fetch_object();
// con la conexion ya hecha imprimir el valor del campo q quiero usasndo la llave ya declarada
$cacName = $country -> cacName;

//CONEXION A BASE DE DATOS 
 $_cma = mysqli_query($tipomc, "
            SELECT * FROM tipo_de_cuestionario_$tsacId
            WHERE cuestionarioId = '". $cuestionarioId ."'
        ");        
// hare un wil para generar de manera automatica los modales de edicion 
$m = $_cma -> fetch_object();
$cuestionarioName = $m -> cuestionarioName;    
    

// view

require_once '../v/pac/jDelete.php';
