<?php

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';

// select

$_client = mysqli_query($connection, "
    SELECT * FROM c1
    WHERE c1Id = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$c1Id = $client -> c1Id;
$procesado = $client -> c1Procesado;
$pais = $client -> countryId ;
$se = $client -> serviceId;
$eco = $client -> economicAreaId;
$ni = $client -> ningresoId;
$nt = $client -> ntrabajadorId;


// select

$_cc = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE diagnosticoId = '" . $_GET["d"] . "'
    AND categoriasStatus > 0
");
$cc = $_cc -> fetch_object();

$caId = $cc -> categoriasId;

$_c = mysqli_query($master, "
    SELECT * FROM c3
    WHERE c1Id = '" . $c1Id  . "'
");



$sd = "localhost";
$ud = "sagracom";
$pd = "Sagra2507.";
$dd = 'sagracom_d'. $_GET["d"];

$mastera = new mysqli($sd, $ud, $pd, $dd);

//caso 1
$i = 1;
$_cp1 = mysqli_query($mastera, "
    SELECT * FROM r
    WHERE c1Id = '" . $_GET["cid"] . "' AND 
    categoria = '" . $caId  . "'
");
$cp1 = $_cp1 -> fetch_object();

    $_diagnostico1 = mysqli_query($master, "
        SELECT * FROM categorias
        WHERE categoriasId = '" . $cp1 -> categoria . "'
        ");
                                                        
        $diagnostico1 = $_diagnostico1 -> fetch_object();
        $cname1 = $diagnostico1 -> categoriasName;
        $r1 = $cp1 -> r1;
        
    $_dcp = mysqli_query($master, "
            SELECT * FROM c3
            WHERE c1Id = '" . $c1Id  . "'
            AND  diagnosticoId = '" . $_GET["d"] . "' 
            AND a1 = 1
            "); 

// select

$_categoriasd = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE diagnosticoId = '" . $_GET["d"] . "'
    AND categoriasStatus > 0
");

$_observacion = mysqli_query($connection, "
    SELECT * FROM c1
    WHERE c1Id = '" . $_GET["cid"] . "'
    ");
$observacion = $_observacion -> fetch_object();

$_economicArea = mysqli_query($master, "
    SELECT * FROM economicarea
    WHERE economicAreaId = '" . $client -> economicAreaId . "'
    ");
$economicArea = $_economicArea -> fetch_object();
$economicAreaName = $economicArea -> economicAreaName;

$_ntrabajador = mysqli_query($master, "
    SELECT * FROM ntrabajador
    WHERE ntrabajadorId = '" . $client -> ntrabajadorId . "'
    ");
$ntrabajador = $_ntrabajador -> fetch_object();
$ntrabajadorName = $ntrabajador -> ntrabajadorName;

$_ningreso = mysqli_query($master, "
    SELECT * FROM ningreso
    WHERE ningresoId = '" . $client -> ningresoId . "'
    ");
$ningreso = $_ningreso -> fetch_object();
$ningresoName = $ningreso -> ningresoName;

$_ningreso = mysqli_query($master, "
    SELECT * FROM ningreso
    WHERE ningresoId = '" . $client -> ningresoId . "'
    ");
$ningreso = $_ningreso -> fetch_object();
$ningresoName = $ningreso -> ningresoName;


$_country = mysqli_query($master, "
    SELECT * FROM country
    WHERE countryId = '" . $client -> countryId . "'
    ");
$country = $_country -> fetch_object();
$countryName = $country -> countryName;


$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $se . "'
");

$service = $_service -> fetch_object();
$servicename = $service -> serviceName ;

require_once '../v/dformulario/jUpdate2.php';







