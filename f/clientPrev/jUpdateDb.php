<?php

// module
$module = 'clientPrev';

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/* datos personales */
$s = $_POST['approved'];



if ($s == 3){
    $_observacion = mysqli_query($connection, "
    SELECT * FROM clientprev
    WHERE clientId = '" . $_GET["cid"] . "'
    ");
$oc = $_observacion -> fetch_object();
//line 1
$clientName = $oc -> clientName;
$clientNit = $oc -> clientNit;
$clientAddress = $oc -> clientAddress;
$clientCity = $oc -> clientCity;
$clientState = $oc -> clientState;
//line 2
$countryId = $oc -> countryId;
$clientZipCode = $oc -> clientZipCode;
$clientContact = $oc -> clientContact;
$clientPhone1 = $oc -> clientPhone1;
$clientPhone2 = $oc -> clientPhone2;
//line 3
$clientEmail = $oc -> clientEmail;
$clientWebPage = $oc -> clientWebPage;
$clientObservations = $oc -> clientObservations;
$economicAreaId = $oc -> economicAreaId;
$clientDate = $oc -> clientDate;
//line 4
$statusId = $oc -> statusId;
$riskId = $oc -> riskId;
$validAudit = $oc -> validAudit;
$cargo = $oc -> cargo;
$correoN = $oc -> correoN;
//line 5
$ntrabajadorId = $oc -> ntrabajadorId;
$ningresoId = $oc -> ningresoId;
$ig = $oc -> ig;
$li = $oc -> li;
$serviceId = $oc -> serviceId;
//line 6    
$origen = $oc -> origen;
$datedocumento1 = $oc -> datedocumento1;
$datedocumento2 = $oc -> datedocumento2;
$documentoId = $oc -> clientId;
//variable de origen

    // connexion a la bvase de datos correspondiente y envio de la informacion 
$client = $connection -> prepare ("
    INSERT INTO client
    (clientName, clientNit, clientAddress, clientCity, clientState,
    countryId, clientZipCode, clientContact, clientPhone1, clientPhone2, 
    clientEmail,clientWebPage, clientObservations, economicAreaId, clientDate, 
    statusId, riskId, validAudit, cargo, correoN, 
    ntrabajadorId, ningresoId, ig, li, serviceId, 
    origen, datedocumento1, datedocumento2, documentoId)
    VALUES
    (?,?,?,?,?,
     ?,?,?,?,?,
     ?,?,?,?,?,
     ?,?,?,?,?,
     ?,?,?,?,?,
     ?,?,?,?)
");
$client -> bind_param (
    "sssssissiisssiiiiissiissiissi",
    $clientName, $clientNit, $clientAddress, $clientCity, $clientState,
    $countryId, $clientZipCode, $clientContact, $clientPhone1, $clientPhone2,
    $clientEmail, $clientWebPage, $clientObservations, $economicAreaId, $clientDate, 
    $statusId, $riskId, $validAudit, $cargo, $correoN,
    $ntrabajadorId, $ningresoId, $ig, $li, $serviceId,
    $origen, $datedocumento1, $datedocumento2, $documentoId
);

$client -> execute();
$status = 2; 

$update = $connection -> prepare ("
    UPDATE clientprev
    SET
    clientStatus = ?
    WHERE
    clientId = ?
");	

$update -> bind_param (
    "ii",
    $status, $_GET["cid"]
);

$update -> execute();


}
if ($s == 2){
$status = 2; 
$update = $connection -> prepare ("
    UPDATE clientprev
    SET
    clientStatus = ?
    WHERE
    clientId = ?
");	

$update -> bind_param (
    "ii",
    $status, $_GET["cid"]
);

$update -> execute();

}

 echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
    
