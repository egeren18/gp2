<?php

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';

// recibo variables por URL
$clientId = $_GET["clientId"];
$serviceId = $_GET["serviceId"];
$termycondId = $_GET["cid"];


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
                                     
                                    

// view                                        
$sS = "localhost";
$uS = "sagracom";
$pS = "Sagra2507.";
$dS = "sagracom_2" ;

$connection = new mysqli($sS, $uS, $pS, $dS);



$_a1 = mysqli_query($connection, "
    SELECT * FROM termycond
    WHERE termycondId = '" . $termycondId . "'
    AND statusId = 1
");
$a1c = 0;
while($a1 = $_a1 -> fetch_object()){
    $a1c = $a1c + 1 ;
}

$_a2 = mysqli_query($connection, "
    SELECT * FROM termycond
    WHERE termycondId = '" . $termycondId . "'
    AND statusId = 2
");
$a2c = 0;
while($a1 = $_a2 -> fetch_object()){
    $a2c = $a2c + 1 ;
}

$_a3 = mysqli_query($connection, "
    SELECT * FROM termycond
    WHERE termycondId = '" . $termycondId . "'
    AND statusId = 33
");
$a3c = 0;
while($a1 = $_a3 -> fetch_object()){
    $a3c = $a3c + 1 ;
}


$_a4 = mysqli_query($connection, "
    SELECT * FROM termycond
    WHERE termycondId = '" . $termycondId . "'
    AND statusId = 4
");
$a4c = 0;


while($a1 = $_a4 -> fetch_object()){
    $a4c = $a4c + 1 ;
}
$_a5 = mysqli_query($connection, "
    SELECT * FROM termycond
    WHERE termycondId = '" . $termycondId . "'
    AND statusId = 0
");
$a5c = 0;
while($a1 = $_a5 -> fetch_object()){
    $a5c = $a5c + 1 ;
}
$_a6 = mysqli_query($connection, "
    SELECT * FROM termycond
    WHERE termycondId = '" . $termycondId . "'
    AND statusId = 5
");
$a6c = 0;
while($a1 = $_a6 -> fetch_object()){
    $a6c = $a6c + 1 ;
}


require_once '../v/termycond/jList.php';
