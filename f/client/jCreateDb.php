<?php

// connection

include '../connection.php';
include '../connection2.php';

// var

// datos Persona de contacto
$pName = $_POST['nombreN']; 
$pLastName = $_POST['apellidoN'];
$clientContact = $pName . $pLastName;
$pCargo = $_POST['cargoN'];
$pCorreo = $_POST['correoN'];
$clientPhone2 = filter_var($_POST['clientPhone2'], FILTER_SANITIZE_STRING);

// Datos de empresa 

$clientName = filter_var($_POST['clientName'], FILTER_SANITIZE_STRING);
$clientNit = filter_var($_POST['clientNit'], FILTER_SANITIZE_STRING);
$clientPhone1 = filter_var($_POST['clientPhone1'], FILTER_SANITIZE_STRING);
$clientEmail = filter_var($_POST['clientEmail'], FILTER_SANITIZE_STRING);
$clientAddress = filter_var($_POST['clientAddress'], FILTER_SANITIZE_STRING);
$clientCity = filter_var($_POST['clientCity'], FILTER_SANITIZE_STRING);
$clientState = filter_var($_POST['clientState'], FILTER_SANITIZE_STRING);
$countryId = $_POST['countryId'];
$clientZipCode = filter_var($_POST['clientZipCode'], FILTER_SANITIZE_STRING);
$clientWebPage = filter_var($_POST['clientWebPage'], FILTER_SANITIZE_STRING);
$serviceId = $_POST['serviceId'];
$clientObservations = filter_var($_POST['clientObservations'], FILTER_SANITIZE_STRING);
// ntrabajador
$nt = $_POST['nt'];
// ningreso
$ni = $_POST['ni'];
//redes
$ig = $_POST['ig'];
$li = $_POST['li'];
//sector al q pertenece
$economicAreaId = $_POST['economicAreaId'] ?? '';
$clientAnotherArea = filter_var($_POST['clientAnotherArea'], FILTER_SANITIZE_STRING);
//otros Datos
$clientDate = date('Y');
$statusId = 1;
$riskId = 1;
$validAudit = 0;



// select

$_client = mysqli_query(
    $connection, "
    SELECT * FROM client
    WHERE clientName = '" . $clientName . "'
    AND clientStatus = 1
");

$client = $_client -> fetch_object();

$clientDb = $client -> clientName;

if (isset($clientDb)) {

    echo "<script> window.location='../c/client.php?m=index&n=duplicated'</script>";
    
}
else {
    
    
    
        foreach($_POST['shareholderName'] as $key => $name) {

        // insert

        $percent = $_POST['shareholderPercent'][$key];
        $a = $a + $percent; 

}

    if ($a == 100){
        // insert



$client = $connection -> prepare ("
    INSERT INTO client
    (clientName, clientNit, clientAddress, clientCity, clientState,
    countryId, clientZipCode, clientContact, clientPhone1, clientPhone2,
    clientEmail, clientWebPage, clientObservations, economicAreaId, clientAnotherArea,
    clientDate, statusId, riskId, validAudit, 
    cargo, correoN, ntrabajadorId, ningresoId, ig, li, serviceId)
    VALUES
    (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
");
$client -> bind_param (
    "sssssisssssssissiiissiissi",
    $clientName, $clientNit, $clientAddress, $clientCity, $clientState,
    $countryId, $clientZipCode, $clientContact, $clientPhone1, $clientPhone2,
    $clientEmail, $clientWebPage, $clientObservations, $economicAreaId, $clientAnotherArea,
    $clientDate, $statusId, $riskId, $validAudit, 
    $pCargo, $pCorreo, $nt, $ni, $ig, $ig, $serviceId
);




$client -> execute();
$insertId = $connection -> insert_id;

foreach($_POST['shareholderName'] as $key => $name) {

    // insert

    $personId = $_POST['personId'][$key];
    $percent = $_POST['shareholderPercent'][$key];
    $insert = $connection -> prepare ("
        INSERT INTO shareholder
        (clientId, shareholderName, personId, shareholderPercent)
        VALUES
        (?,?,?,?)
    ");
    $insert -> bind_param (
        "issd",
        $insertId, $name, $personId, $percent
    );
    $insert -> execute();

}

// trace

$userId = $_SESSION["userId"];
$module = 'Client';
$action = 'Insert';
$itemId = $insertId;

$trace = $connection -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");
$trace -> bind_param (
    "issi",
    $userId, $module, $action, $itemId
);
$trace -> execute();

// view

echo "<script> window.location='../c/client.php?m=index&n=added'</script>";
    }else {
        
 echo "<script> window.location='../c/client.php?m=index&n=porcentaje'</script>"; 
        
    }
    
}
  

