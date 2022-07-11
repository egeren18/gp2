<?php

// connection

include '../connection.php';
include '../connection2.php';

// access

include '../allow.php';


$_sac = mysqli_query($master, "
    SELECT * FROM sac
    WHERE serviceId = '" . $_GET['pid'] . "'
    ");

$sac = $_sac -> fetch_object();
$modeloName = $sac -> modeloName ;
$sacc = $sac -> sacc;
$sacp = $sac -> sacp;
$cdate = $sac -> cdate;
$oldDate = $sac -> oldDate;
$date = $sac -> date;
$userId = $sac -> userId;
$version = $sac -> version;

// Categoria 1
$_pac1 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 1 AND pacStatus = 1
    ");

$_cac1 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 1
    ");
$cac1 = $_cac1 -> fetch_object();
$cac1Name = $cac1 -> cacName;
$cacId1 = $cac1 -> cacId;
// Categoria 2
$_pac2 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 2 AND pacStatus = 1
    ");

$_cac2 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 2
    ");
$cac2 = $_cac2 -> fetch_object();
$cac2Name = $cac2 -> cacName;
$cacId2 = $cac2 -> cacId;
// Categoria 3
$_pac3 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 3 AND pacStatus = 1
    ");

$_cac3 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 3
    ");
$cac3 = $_cac3 -> fetch_object();
$cac3Name = $cac3 -> cacName;
$cacId3 = $cac3 -> cacId;
// Categoria 4
$_pac4 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 4 AND pacStatus = 1
    ");

$_cac4 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 4
    ");
$cac4 = $_cac4 -> fetch_object();
$cac4Name = $cac4 -> cacName;
$cacId4 = $cac4 -> cacId;
// Categoria 5
$_pac5 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 5 AND pacStatus = 1
    ");

$_cac5 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 5
    ");
$cac5 = $_cac5 -> fetch_object();
$cac5Name = $cac5 -> cacName;
$cacId5 = $cac5 -> cacId;
// Categoria 6
$_pac6 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 6 AND pacStatus = 1
    ");

$_cac6 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 6
    ");
$cac6 = $_cac6 -> fetch_object();
$cac6Name = $cac6 -> cacName;
$cacId6 = $cac6 -> cacId;
// Categoria 7
$_pac7 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 7 AND pacStatus = 1
    ");

$_cac7 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 7
    ");
$cac7 = $_cac7 -> fetch_object();
$cac7Name = $cac7 -> cacName;
$cacId7 = $cac7 -> cacId;
// Categoria 8
$_pac8 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 8 AND pacStatus = 1
    ");

$_cac8 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 8
    ");
$cac8 = $_cac8 -> fetch_object();
$cac8Name = $cac8 -> cacName;
$cacId8 = $cac8 -> cacId;
// Categoria 9
$_pac9 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 9 AND pacStatus = 1
    ");

$_cac9 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 9
    ");
$cac9 = $_cac9 -> fetch_object();
$cac9Name = $cac9 -> cacName;
$cacId9 = $cac9 -> cacId;
// Categoria 10
$_pac10 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 10 AND pacStatus = 1
    ");

$_cac10 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND cacId = 10
    ");
$cac10 = $_cac10 -> fetch_object();
$cac10Name = $cac10 -> cacName;
$cacId10 = $cac10 -> cacId;


$_grafico = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND version =  '" . $version . "'
    ");
$contador = 0;
$acumulador = 0;
while($grafico = $_grafico -> fetch_object()){
    if($grafico -> status == 1){$contador++;}
    else{$acumulador++;}
}




$_botones = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $_GET['pid'] . "'
    AND version =  '" . $version . "'
    AND pacStatus = 1
    ");


// view

require_once '../v/pac/jCreate2.php';
