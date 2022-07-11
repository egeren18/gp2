<?php

// connection

include '../connection.php';
include '../allow.php';

// select
$clientId = $_GET["clientId"];
$serviceId = $_GET["serviceId"];
$termycondId = $_GET["termycondId"];

$_termycond = mysqli_query($master, "
    SELECT * FROM termycond
    WHERE termycondId = '" . $_GET["termycondId"] . "'
");

$termycond = $_termycond -> fetch_object();
$termycondName = $termycond -> termycondName ;


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

$desicion = mysqli_query(
    $master, "
    SELECT * FROM desicion
    WHERE desicionStatus = 1

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

// view

require_once '../v/termycond/jUpdate2.php';