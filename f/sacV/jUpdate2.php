<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM modelo
    WHERE modeloId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$diagnosticoName = $client -> modeloName;
$modeloId = $client -> modeloId ;

$_sac = mysqli_query($master, "
    SELECT * FROM sac
    WHERE serviceId = '" . $modeloId . "'
");

$sac = $_sac -> fetch_object();
$sacc = $sac -> sacc;
$sacp = $sac -> sacp;
$version = $sac -> version;
$serviceId = $sac -> serviceId;
$modeloName = $sac -> modeloName;
$oldDate = $sac -> date;
$cdate = $sac -> cdate;

$_trazau = mysqli_query($master, "SELECT * FROM tracem WHERE serviceId = '" . $serviceId . "'  ");
$client = $_trazau -> fetch_object();
$_usert = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $client -> userId . "'");
$user = $_usert -> fetch_object();

$sMrer = "localhost";
$uMrer = "sagracom_crear";
$pMrer = "Sagra2507.";
$dMrer = 'sagracom_modelos_cuestionarios';
$rer = new mysqli($sMrer, $uMrer, $pMrer, $dMrer);
 
$_cp1 = mysqli_query($rer, "
    SELECT * FROM m$serviceId
    WHERE cacId = 1
");
$_cac1 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE  cacId = 1 AND serviceId = '" . $serviceId. "'
");
$cac1 = $_cac1 -> fetch_object();
$cac1Name = $cac1 -> cacName;
$_cac2 = mysqli_query($master, "
    SELECT * FROM cac 
    WHERE cacId = 2 AND serviceId = '" . $serviceId . "'
");
$cac2 = $_cac2 -> fetch_object();
$cac2Name = $cac2 -> cacName;

$_cac3 = mysqli_query($master, "
    SELECT * FROM cac 
    WHERE cacId = 3 AND serviceId = '" . $serviceId . "'
");
$cac3 = $_cac3 -> fetch_object();
$cac3Name = $cac3 -> cacName;

$_cac4 = mysqli_query($master, "
    SELECT * FROM cac 
    WHERE cacId = 4 AND serviceId = '" . $serviceId . "'
");
$cac4 = $_cac4 -> fetch_object();
$cac4Name = $cac4 -> cacName;
$_cac5 = mysqli_query($master, "
    SELECT * FROM cac 
    WHERE cacId = 5 AND serviceId = '" . $serviceId . "'
");
$cac5 = $_cac5 -> fetch_object();
$cac5Name = $cac5 -> cacName;

$_cac6 = mysqli_query($master, "
    SELECT * FROM cac 
    WHERE cacId = 6 AND serviceId = '" . $serviceId . "'
");
$cac6 = $_cac6 -> fetch_object();
$cac6Name = $cac6 -> cacName;

$_cac7 = mysqli_query($master, "
    SELECT * FROM cac 
    WHERE cacId = 7 AND serviceId = '" . $serviceId . "'
");
$cac7 = $_cac7 -> fetch_object();
$cac7Name = $cac7 -> cacName;

$_cac8 = mysqli_query($master, "
    SELECT * FROM cac 
    WHERE cacId = 8 AND serviceId = '" . $serviceId . "'
");
$cac8 = $_cac8 -> fetch_object();
$cac8Name = $cac8 -> cacName;

$_cac9 = mysqli_query($master, "
    SELECT * FROM cac 
    WHERE cacId = 8 AND serviceId = '" . $serviceId . "'
");
$cac9 = $_cac9 -> fetch_object();
$cac9Name = $cac9 -> cacName;

$_cac10 = mysqli_query($master, "
    SELECT * FROM cac 
    WHERE  cacId = 8 AND serviceId = '" . $serviceId . "'
");
$cac10 = $_cac10 -> fetch_object();
$cac10Name = $cac10 -> cacName;

$_cp2 = mysqli_query($rer, "
    SELECT * FROM m$serviceId
    WHERE cacId = 2
");

$_cp3 = mysqli_query($rer, "
    SELECT * FROM m$serviceId
    WHERE cacId = 3
");

$_cp4 = mysqli_query($rer, "
    SELECT * FROM m$serviceId
    WHERE cacId = 4
");

$_cp5 = mysqli_query($rer, "
    SELECT * FROM m$serviceId
    WHERE cacId = 5
");

$_cp6 = mysqli_query($rer, "
    SELECT * FROM m$serviceId
    WHERE cacId = 6
");

$_cp7 = mysqli_query($rer, "
    SELECT * FROM m$serviceId
    WHERE cacId = 7
");
$_cp8 = mysqli_query($rer, "
    SELECT * FROM m$serviceId
    WHERE cacId = 8
");
$_cp9 = mysqli_query($rer, "
    SELECT * FROM m$serviceId
    WHERE cacId = 9
");

$_cp10 = mysqli_query($rer, "
    SELECT * FROM m$serviceId
    WHERE  cacId = 10
");

$_tabla = mysqli_query($master, "
    SELECT * FROM m$serviceId
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 
");



// view

require_once '../v/sac/jUpdate2.php';