<?php

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';

// select

$_client = mysqli_query($connection, "
    SELECT * FROM clientprev
    WHERE clientId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$pais = $client -> countryId ;
$se = $client -> serviceId;
$eco = $client -> economicAreaId;
$ni = $client -> ningresoId;
$nt = $client -> ntrabajadorId;



// select
$_nid = mysqli_query($master, "
    SELECT * FROM ningreso
    WHERE ningresoId = '" . $ni . "'
");
$nid = $_nid -> fetch_object();
$niname = $nid -> ningresoName ;

// select
$_ntid = mysqli_query($master, "
    SELECT * FROM ntrabajador
    WHERE ntrabajadorId = '" . $nt . "'
");
$ntid = $_ntid -> fetch_object();
$ntname = $ntid -> ntrabajadorName ;



// select

$_country = mysqli_query($master, "
    SELECT * FROM country
    WHERE countryId = '" . $pais . "'
");

$country = $_country -> fetch_object();
$countryname = $country -> countryName ;

// select

$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $se . "'
");

$service = $_service -> fetch_object();
$servicename = $service -> serviceName ;


// select

$_economicArea = mysqli_query($master, "
    SELECT * FROM economicarea
    WHERE economicAreaId =  '" . $eco . "'
");

$economicArea = $_economicArea -> fetch_object();
$ename = $economicArea -> economicAreaName ;


// view

require_once '../v/clientPrev/jUpdate.php';







