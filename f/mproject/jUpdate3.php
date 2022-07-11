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

$_modelo = mysqli_query($master, "
    SELECT * FROM modelo
    WHERE modeloId = '" . $_GET['modeloId'] . "'
");

$modelo = $_modelo -> fetch_object();
$modeloName = $modelo -> modeloName ;

$_modelo2 = mysqli_query($master, "
    SELECT * FROM modelo
    WHERE modeloStatus = 1
");


$_mmodelo = mysqli_query($master, "
    SELECT * FROM mmodelo
    WHERE mmodeloId = '" . $_GET['mmodeloId'] . "' AND serviceId = '" . $_GET['serviceId'] . "' AND etapaId = '" . $_GET['etapaId'] . "' AND mcategoriaId = '" . $_GET['mcategoriaId'] . "' AND actividadId = '" . $_GET['actividadId'] . "' AND modeloId = '" . $_GET['modeloId'] . "'

");



$mmodelo = $_mmodelo -> fetch_object();
$mText1 = $mmodelo -> texto1;
$mText2 = $mmodelo -> texto2;
$mText3 = $mmodelo -> texto3;
$mText4 = $mmodelo -> texto4;
$mText5 = $mmodelo -> texto5;
$mText6 = $mmodelo -> texto6;
$mText7 = $mmodelo -> texto7;
$mText8 = $mmodelo -> texto8;
$mText9 = $mmodelo -> texto9;
$mText10 = $mmodelo -> texto10;
$mText11 = $mmodelo -> texto11;
$mText12 = $mmodelo -> texto12;
$mText13 = $mmodelo -> texto13;
$mText14 = $mmodelo -> texto14;
$mText15 = $mmodelo -> texto15;
$mText16 = $mmodelo -> texto16;
$mText17 = $mmodelo -> texto17;
$mText18 = $mmodelo -> texto18;
$mText19 = $mmodelo -> texto19;
$mText20 = $mmodelo -> texto20;
$npregunta = $mmodelo -> npregunta;

// view

require_once '../v/mproject/jUpdate3.php';