<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $_GET["serviceId"] . "'
");

$service = $_service -> fetch_object();
$serviceName = $service -> serviceName ;

$_etapa = mysqli_query($master, "
    SELECT * FROM etapa
    WHERE etapaId = '" . $_GET["etapaId"] . "'
");

$etapa = $_etapa -> fetch_object();
$etapaName = $etapa -> etapaName ;

$_categoria = mysqli_query($master, "
    SELECT * FROM mcategoria
    WHERE mcategoriaId = '" . $_GET["mcategoriaId"] . "'
");

$categoria = $_categoria -> fetch_object();
$mcategoriaName = $categoria -> categoriaText ;

$_actividad = mysqli_query($master, "
    SELECT * FROM actividad
    WHERE actividadId = '" . $_GET["actividadId"] . "'
");

$actividad = $_actividad -> fetch_object();
$actividadText = $actividad -> actividadText ;
$actividadName = $actividad -> actividadName ;

$actividadId = $actividad -> actividadId;


// view

require_once '../v/mproject/jUpdate2.php';