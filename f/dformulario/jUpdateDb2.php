<?php
// connection

include '../connection.php';
include '../connection2.php';

// module
$module = 'dformulario';
$a = $_POST['approved'];
$a12 = $_POST['a12'];

if($a12 == 1)
{
$_observacion = mysqli_query($connection, "
    SELECT * FROM c1
    WHERE c1Id = '" . $_GET["cid"] . "'
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
$diagnosticoId = $oc -> diagnosticoId;
$c1Fecha = $oc -> c1Fecha;
//variable de origen
$origen = 2;
    // connexion a la bvase de datos correspondiente y envio de la informacion 
$client = $connection -> prepare ("
    INSERT INTO clientprev
    (clientName, clientNit, clientAddress, clientCity, clientState,
    countryId, clientZipCode, clientContact, clientPhone1, clientPhone2, 
    clientEmail,clientWebPage, clientObservations, economicAreaId, clientDate, 
    statusId, riskId, validAudit, cargo, correoN, 
    ntrabajadorId, ningresoId, ig, li, serviceId, 
    origen)
    VALUES
    (?,?,?,?,?,
     ?,?,?,?,?,
     ?,?,?,?,?,
     ?,?,?,?,?,
     ?,?,?,?,?,
     ?)
");
$client -> bind_param (
    "sssssissiisssiiiiissiissii",
    $clientName, $clientNit, $clientAddress, $clientCity, $clientState,
    $countryId, $clientZipCode, $clientContact, $clientPhone1, $clientPhone2,
    $clientEmail, $clientWebPage, $clientObservations, $economicAreaId, $clientDate, 
    $statusId, $riskId, $validAudit, $cargo, $correoN,
    $ntrabajadorId, $ningresoId, $ig, $li, $serviceId,
    $origen
);

$client -> execute();
$id = $masterc -> insert_id;
$coti = 1;
$c1Procesado = 1;
$update = $connection -> prepare ("
    UPDATE c1
    SET
    c1Procesado = ?,
    coti = ?
    WHERE
    c1Id = ?
");	

$update -> bind_param (
    "iii",
    $c1Procesado, $coti, $_GET["cid"]
);
$update -> execute();
echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
}

//condicional
if ($a == 1) {
$c1Procesado = 1;
$update = $connection -> prepare ("
    UPDATE c1
    SET
    c1Procesado = ?
    WHERE
    c1Id = ?
");	

$update -> bind_param (
    "ii",
    $c1Procesado, $_GET["cid"]
);
$update -> execute();
echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
}
echo "<script> window.location='../c/{$module}.php?m=index'</script>";
