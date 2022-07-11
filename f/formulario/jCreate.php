<?php

// module

$module = 'formulario';

// connection

include '../connection.php';
include '../allow.php';
// variable 
$id = $_GET["id"];

// conexion a sucriber 2 y user 2

$final = mysqli_query(
   $master,
    "SELECT * FROM subscriber2
  WHERE subscriberId = '" .   $id . "'
"); 
$r_qtyR  = mysqli_fetch_array($final);


$sn = $r_qtyR["subscriberName"];
$srif = $r_qtyR["subscriberRif"];
$sp1 = $r_qtyR["subscriberPhone1"];
$sp2 = $r_qtyR["subscriberPhone2"];
$scn = $r_qtyR["subscriberContactName"];
$scsn = $r_qtyR["subscriberContactSurname"];
$scemail = $r_qtyR["subscriberContactEmail"];
$scaddress = $r_qtyR["subscriberAddress"];
$sccity = $r_qtyR["subscriberCity"];
$scstate = $r_qtyR["subscriberState"];

$sccountry = $r_qtyR["countryId"];
$sczip = $r_qtyR["subscriberZipCode"];
$scweb = $r_qtyR["subscriberWebPage"];
$scuser = $r_qtyR["subscriberUsers"];
$sctime = $r_qtyR["subscriptionId"];

$ssc = mysqli_query(
   $master,
    "SELECT * FROM country
  WHERE countryId = '" .   $sccountry . "'
"); 
$r_ssc  = mysqli_fetch_array($ssc);
$countryname = $r_ssc["countryName"];

$sid = mysqli_query(
   $master,
    "SELECT * FROM subscription
  WHERE subscriptionId = '" .   $sctime . "'
"); 
$r_sid  = mysqli_fetch_array($sid);

$subscriptioname = $r_sid["subscriptionName"];


// select

$_country = mysqli_query($master, "
    SELECT * FROM country
    WHERE countryStatus = 1
    ORDER BY countryName
");

// select

$_subscription = mysqli_query($master, "
    SELECT * FROM subscription
    WHERE subscriptionStatus = 1
    ORDER BY subscriptionName
");

// select

$_module = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleType = 3
    AND moduleController IS NOT NULL
    ORDER BY moduleName ASC
");

// select

$_moduleNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 3
");

// select

$_audit = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleType = 4
    AND moduleController IS NOT NULL
    ORDER BY moduleName ASC
");

// select

$_auditNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 4
");

// select

$_administration = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleType = 5
    AND moduleController IS NOT NULL
    ORDER BY moduleName ASC
");

// select

$_administrationNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 5
");

// select

$_rrhh = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleType = 6
    AND moduleController IS NOT NULL
    ORDER BY moduleName ASC
");

// select

$_rrhhNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 6
");

// select

$_support = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleType = 7
    AND moduleController IS NOT NULL
    ORDER BY moduleName ASC
");

// select

$_supportNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 7
");

// select

$_net = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleType = 8
    AND moduleController IS NOT NULL
    ORDER BY moduleName ASC
");

// select

$_netNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 8
");


// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/formulario/jCreate.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/formulario/jCreate.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/formulario/jCreate.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/formulario/jCreate.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/formulario/jCreate.php';
        break;

    default:
        require_once '../v/formulario/jCreate.php';
        break;
}