<?php

// connection

include '../connection.php';
include '../connection2.php';

// var

$clientId = $_GET["cid"];
$clientName = filter_var($_POST['clientName'], FILTER_SANITIZE_STRING);
$clientNit = filter_var($_POST['clientNit'], FILTER_SANITIZE_STRING);
$clientAddress = filter_var($_POST['clientAddress'], FILTER_SANITIZE_STRING);
$clientCity = filter_var($_POST['clientCity'], FILTER_SANITIZE_STRING);
$clientState = filter_var($_POST['clientState'], FILTER_SANITIZE_STRING);
$countryId = $_POST['countryId'];
$clientZipCode = filter_var($_POST['clientZipCode'], FILTER_SANITIZE_STRING);
$clientContact = filter_var($_POST['clientContact'], FILTER_SANITIZE_STRING);
$clientPhone1 = filter_var($_POST['clientPhone1'], FILTER_SANITIZE_STRING);
$clientPhone2 = filter_var($_POST['clientPhone2'], FILTER_SANITIZE_STRING);
$clientEmail = filter_var($_POST['clientEmail'], FILTER_SANITIZE_STRING);
$clientWebPage = filter_var($_POST['clientWebPage'], FILTER_SANITIZE_STRING);
$clientObservations = filter_var($_POST['clientObservations'], FILTER_SANITIZE_STRING);
$economicAreaId = $_POST['economicAreaId'];
$clientAnotherArea = filter_var($_POST['clientAnotherArea'], FILTER_SANITIZE_STRING);

// select

//$_client = mysqli_query(
//    $connection,
//    "SELECT * FROM client
//    WHERE clientName = '" . $clientName . "'
//    AND clientStatus = 1
//");

//$client = $_client -> fetch_object();

// update

    foreach($_POST['shareholderName'] as $key => $shareholderName) {

       $percent = $_POST['shareholderPercent'][$key];
        $a = $a + $percent; 

       }
if ($a == 100){
    $update = $connection -> prepare ("
    UPDATE client
    SET
    clientName = ?,
    clientNit = ?,
    clientAddress = ?,
    clientCity = ?,
    clientState = ?,
    countryId = ?,
    clientZipCode = ?,
    clientContact = ?,
    clientPhone1 = ?,
    clientPhone2 = ?,
    clientEmail = ?,
    clientWebPage = ?,
    clientObservations = ?,
    economicAreaId = ?,
    clientAnotherArea = ?
    WHERE
    clientId = ?
    ");	

    $update -> bind_param (
        "sssssisssssssisi",
        $clientName, $clientNit, $clientAddress, $clientCity, $clientState,
        $countryId, $clientZipCode, $clientContact, $clientPhone1, $clientPhone2,
        $clientEmail, $clientWebPage, $clientObservations, $economicAreaId, $clientAnotherArea,
	$clientId
    );

    $update -> execute();
    
    // update
    
    foreach($_POST['shareholderName'] as $key => $shareholderName) {
        
        @$shareholderId = $_POST['shareholderId'][$key];
        @$personId = $_POST['personId'][$key];
        @$shareholderPercent = $_POST['shareholderPercent'][$key];
        
        if ($shareholderId == '') {
            
            $insert = $connection -> prepare ("
                INSERT INTO shareholder
                (clientId, shareholderName, personId, shareholderPercent)
                VALUES
                (?,?,?,?)
            ");

            $insert -> bind_param (
                "issd",
                $clientId, $shareholderName, $personId, $shareholderPercent
            );

            $insert -> execute();
        }
        else {

            $update = $connection -> prepare ("
                UPDATE shareholder
                SET
                shareholderName = ?,
                personId = ?,
                shareholderPercent = ?
                WHERE
                shareholderId = ?
                AND
                clientId = ?
            ");
            
            $update -> bind_param (
                "ssdii",
                $shareholderName, $personId, $shareholderPercent, $shareholderId, $clientId
            );
            
            $update -> execute();
            
        }
    }

    // delete

    $delete = $connection -> prepare ("
        DELETE FROM shareholder WHERE shareholderName = ''
    ");

    $delete -> execute();

    // trace

    $userId = $_SESSION["userId"];
    $module = 'Client';
    $action = 'Update';
    $itemId = $clientId;

    // insert
    
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

    echo "<script>window.location='../c/client.php?m=index&n=updated'</script>";

    
    
    
 }else{
    echo "<script>window.location='../c/client.php?m=index&n=porcentaje'</script>";     
}