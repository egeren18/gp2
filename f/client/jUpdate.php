<?php

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';

// select

$_client = mysqli_query($connection, "
    SELECT * FROM client
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

$_shareholder = mysqli_query($connection, "
    SELECT * FROM shareholder
    WHERE clientId = '" . $_GET["cid"] . "'
    AND shareholderName != ''
");

// select


// select

$clientStatus = mysqli_query($master, "
    SELECT * FROM clientstatus
    WHERE clientStatusStatus = 1
");

// select

$risk = mysqli_query($master, "
    SELECT * FROM risk
    WHERE riskStatus = 1
");

// select

$_economicArea2 = mysqli_query($master, "
    SELECT * FROM economicarea
    WHERE economicAreaStatus = 1
    ORDER BY economicAreaName
");

$_economicArea = mysqli_query($master, "
    SELECT * FROM economicarea
    WHERE economicAreaId =  '" . $eco . "'
");

$economicArea = $_economicArea -> fetch_object();
$ename = $economicArea -> economicAreaName ;

// view

require_once '../v/client/jUpdate.php';
