<?php

// connection

include '../connection.php';
include '../allow.php';

// recibo variables por URL
$clientId = $_GET["clientId"];
$serviceId = $_GET["serviceId"];
$termycondId = $_GET["termycondId"];
$iid = $_GET["iid"];



//val

$_termycond = mysqli_query($master, "
    SELECT * FROM termycond
    WHERE termycondId = '" . $termycondId . "'
");

$roleAc = mysqli_query(
    $master,
    "SELECT * FROM role
    WHERE roleStatus = 1
");


$line = mysqli_query(
    $master,
    "SELECT * FROM line
    WHERE lineStatus = 1
");

$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '". $serviceId ."'
");

//esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
$service = $_service -> fetch_object();

//esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$serviceName = $service -> serviceName ;

$_client = mysqli_query($master, "
    SELECT * FROM client
    WHERE clientId = '". $clientId ."'
");

//esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
$client = $_client -> fetch_object();

//esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$clientName = $client -> clientName ;

$currency = mysqli_query(
    $master,
    "SELECT * FROM currency
");

$Accurrency = mysqli_query(
    $master,
    "SELECT * FROM currency
");

$desicion2 = mysqli_query(
    $master, "
    SELECT * FROM desicion2
    WHERE desicionStatus = 1

");
$desicion3 = mysqli_query(
    $master, "
    SELECT * FROM desicion
    WHERE desicionStatus = 1

");

$scheme = mysqli_query(
    $master, "
    SELECT * FROM efacturacion
    WHERE termycondId = '" . $termycondId . "'

");

$planning = mysqli_query(
    $master, "
    SELECT * FROM rolproyecto
    WHERE termycondId = '" . $termycondId . "'

");


$_client = mysqli_query($master, "
    SELECT * FROM termycond
    WHERE termycondId = '" . $termycondId . "'
");

$client = $_client -> fetch_object();
$cStatus = $client -> cStatus ;
$f1 = $client -> f1;
$f2 = $client -> f2;

if($cStatus == 1){

//Concexion para obtener el valor que fue agregado durante la carga
$_montousado = mysqli_query($master, "
    SELECT * FROM cartypreprojecto
    WHERE termycondId = '" . $termycondId . "'
");

$montousado = $_montousado -> fetch_object();
$montouse = $montousado -> amount ;
$horasc = $montousado -> horasc ;


//conexion para obtener el ID de la moneda en uso
$_monedaenuso = mysqli_query($master, "
    SELECT * FROM cartypreprojecto
    WHERE termycondId = '" . $termycondId . "'
");

$monedaenuso = $_monedaenuso -> fetch_object();
$monedaactual = $monedaenuso -> currencyId ;
$desicion2  = $monedaenuso -> desicion2 ;

//conexion para obtener el nombre de la tabla de monedas
$_nombreMoneda = mysqli_query($master, "
    SELECT * FROM currency
    WHERE currencyId = '" . $monedaactual . "'
");

$nombreMoneda = $_nombreMoneda -> fetch_object();
$nombrecoin = $nombreMoneda -> currencyName ;


}

                    $_socios = mysqli_query($master, "
                                    SELECT * FROM termycond
                                    WHERE termycondId = '" . $termycondId . "'
                                    ");

                                    $socios = $_socios -> fetch_object();
                                    $lider = $socios -> userId ;
                                    $gerente = $socios -> userId2 ; 
                                    
                                    $_socioN = mysqli_query($master, "
                                    SELECT * FROM user
                                    WHERE userId = '" . $lider . "'
                                    ");
                                    
                                    $socioN = $_socioN -> fetch_object();
                                    $liderName = $socioN -> userName ;
                                    
                                    $_gerenteN = mysqli_query($master, "
                                    SELECT * FROM user
                                    WHERE userId = '" . $gerente . "'
                                    ");
                                    
                                    $gerenteN = $_gerenteN -> fetch_object();
                                    $gerenteName = $gerenteN -> userName ;
                                    
                                    $_naturalezaN = mysqli_query($master, "
                                    SELECT * FROM service
                                    WHERE serviceId = '" . $serviceId . "'
                                    ");
                                    
                                    $naturalezaN = $_naturalezaN -> fetch_object();
                                    $naturalezaId = $naturalezaN -> natureId ;
                                    
                                    $_naturalezaName = mysqli_query($master, "
                                    SELECT * FROM nature
                                    WHERE natureId = '" . $naturalezaId . "'
                                    ");
                                    
                                    $naturalezaName = $_naturalezaName -> fetch_object();
                                    $naturalezaNombre = $naturalezaName -> natureName ;
                                    
                                    
                                    
                                     


//
if($iid  == 1){
    require_once '../v/termycond/e1.php';
};
if($iid == 2){
    require_once '../v/termycond/e2.php';
};
if($iid == 3){
    require_once '../v/termycond/e3.php';
};
if($iid == 4){
    require_once '../v/termycond/e4.php';
};

