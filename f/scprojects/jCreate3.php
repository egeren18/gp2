<?php 
// connection

include '../connection.php';

// module

$module = 'sac';
$action = 'add';

// var

$serviceId = $_GET['serviceId'];
$sacc1 = $_GET['sacc1'];
$sacp1 = $_GET['sacp1'];
$acDoerDate = date('d-m-y / g:i a');

// revisar en la tabla para verificar si existe ya ese modelo
$_country = mysqli_query($master, "
    SELECT * FROM sac
    WHERE serviceId = '" . $serviceId . "'
    AND sacStatus = 1
");

$country = $_country -> fetch_object();

$countryDb = $country -> serviceId;
$modeloName = $country -> modeloName;
$sacc = $country -> sacc;
$sacp = $country -> sacp;
$oldDate = $country -> date;
$cdate = $country -> cdate;
$version = $country -> version;

$_categoriaAGG = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $serviceId . "'
    AND cacStatus = 1
");
$_preguntaAGG = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1
");



$_trazau = mysqli_query($master, "SELECT * FROM tracem WHERE serviceId = '" . $serviceId . "'  ");
$client = $_trazau -> fetch_object();
$_usert = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $client -> userId . "'");
$user = $_usert -> fetch_object();


// tabla q me muestra la info de la tabla m11
$_m11 = mysqli_query($master, "
    SELECT * FROM m11
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1
");


$_m11c = mysqli_query($master, "
    SELECT * FROM m11
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1
");

$_cp = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 AND cacId = 1
");
$_cpx = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $serviceId . "'
    AND cacId = 1
");
$cpx = $_cpx -> fetch_object();
$cacName1 = $cpx -> cacName;

$_cp2 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 AND cacId = 2
");
$_cpx2 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $serviceId . "'
    AND cacId = 2
");
$cpx2 = $_cpx2 -> fetch_object();
$cacName2 = $cpx2 -> cacName;

$_cp3 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 AND cacId = 3
");
$_cpx3 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $serviceId . "'
    AND cacId = 3
");
$cpx3 = $_cpx3 -> fetch_object();
$cacName3 = $cpx3 -> cacName;
$_cp4 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 AND cacId = 4
");
$_cpx4 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $serviceId . "'
    AND cacId = 4
");
$cpx4 = $_cpx4 -> fetch_object();
$cacName4 = $cpx4 -> cacName;
$_cp5 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 AND cacId = 5
");
$_cpx5 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $serviceId . "'
    AND cacId = 5
");
$cpx5 = $_cpx5 -> fetch_object();
$cacName5 = $cpx5 -> cacName;
$_cp6 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 AND cacId = 6
");
$_cpx6 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $serviceId . "'
    AND cacId = 6
");
$cpx6 = $_cpx6 -> fetch_object();
$cacName6 = $cpx6 -> cacName;

$_cp7 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 AND cacId = 7
");

$_cpx7 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $serviceId . "'
    AND cacId = 7
");
$cpx7 = $_cpx7 -> fetch_object();
$cacName7 = $cpx7 -> cacName;

$_cp8 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 AND cacId = 8
");
$_cpx8 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $serviceId . "'
    AND cacId = 8
");
$cpx8 = $_cpx8 -> fetch_object();
$cacName8 = $cpx8 -> cacName;

$_cp9 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 AND cacId = 9
");

$_cpx9 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $serviceId . "'
    AND cacId = 9
");
$cpx9 = $_cpx9 -> fetch_object();
$cacName9 = $cpx9 -> cacName;

$_cp10 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 AND cacId = 10
");

$_cpx10 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $serviceId . "'
    AND cacId = 10
");
$cpx10 = $_cpx10 -> fetch_object();
$cacName10 = $cpx10 -> cacName;


$mc = 0;
while($m11c = $_m11c -> fetch_object())
{
$mc++;    
}


require_once '../v/sac/jCreate2.php';
