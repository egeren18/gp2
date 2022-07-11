<?php

// connection

include '../connection.php';

// module

$module = 'formulario';
$action = 'add';

// var

$subscriberName = filter_var($_POST['subscriberName'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberRif = filter_var($_POST['subscriberRif'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberPhone1 = filter_var($_POST['subscriberPhone1'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberPhone2 = filter_var($_POST['subscriberPhone2'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberContactName = filter_var($_POST['subscriberContactName'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberContactSurname = filter_var($_POST['subscriberContactSurname'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberContactEmail = filter_var($_POST['subscriberContactEmail'], FILTER_SANITIZE_EMAIL);
$userPrimary = 1;
$subscriberAddress = filter_var($_POST['subscriberAddress'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberCity = filter_var($_POST['subscriberCity'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberState = filter_var($_POST['subscriberState'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberZipCode = filter_var($_POST['subscriberZipCode'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$countryId = filter_var($_POST['countryId'], FILTER_VALIDATE_INT);
$subscriberWebPage = filter_var($_POST['subscriberWebPage'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberUsers = filter_var($_POST['subscriberUsers'], FILTER_VALIDATE_INT);
$subscriberStart = filter_var($_POST['subscriberStart'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriptionId = filter_var($_POST['subscriptionId'], FILTER_VALIDATE_INT);
$userName = filter_var($_POST["userName"], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$userSurname = filter_var($_POST["userSurname"], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$userEmail = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
$userPassword = password_hash("12345", PASSWORD_DEFAULT);
$userTypeId = 2;
$userAdmin = 2;
$riskPartnerName = filter_var($_POST["riskPartnerName"], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$riskPartnerSurname = filter_var($_POST["riskPartnerSurname"], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$riskPartnerEmail = filter_var($_POST["riskPartnerEmail"], FILTER_SANITIZE_EMAIL);
$riskPartnerPassword = password_hash("12345", PASSWORD_DEFAULT);
$riskPartnerAdmin = 3;
//$subscriberDatabase = preg_replace('([^A-Za-z0-9])', '', strtolower($subscriberName));
$notification = "El Suscriptor << " . $subscriberName . " >> ha sido creado!";
$userQuestion1 = $_POST['userQuestion'];
$userQuestion2 = $_POST['userQuestion2'];
// select

$_subscription = mysqli_query($master, "
    SELECT * FROM subscription
    WHERE subscriptionId = '" . $subscriptionId . "'
");

$subscription = $_subscription -> fetch_object();

$days = $subscription -> subscriptionDays;
$subscriberStart = date('Y-m-j');
$subscriberExpires = strtotime ( '+' . $days . ' day' , strtotime ($subscriberStart) ) ;
$subscriberExpires = date ( 'Y-m-j' , $subscriberExpires );

// insert

$insert = $master -> prepare ("
    INSERT INTO subscriber2
    (subscriberName, subscriberRif, subscriberPhone1, subscriberPhone2, subscriberContactName,
    subscriberContactSurname, subscriberContactEmail, subscriberAddress, subscriberCity, subscriberState,
    subscriberZipCode, countryId, subscriberWebPage, subscriberUsers, subscriberStart,
    subscriberExpires, subscriptionId, subscriberDatabase)
    VALUES
    (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
");

$insert -> bind_param (
    "sssssssssssissssis",
    $subscriberName, $subscriberRif, $subscriberPhone1, $subscriberPhone2, $subscriberContactName,
    $subscriberContactSurname, $subscriberContactEmail, $subscriberAddress, $subscriberCity, $subscriberState,
    $subscriberZipCode, $countryId, $subscriberWebPage, $subscriberUsers, $subscriberStart,
    $subscriberExpires, $subscriptionId, $subscriberDatabase
);

$insert -> execute();

$id = $master -> insert_id;



// insert

$insert = $master -> prepare ("
    INSERT INTO user2
    (subscriberId, userName, userSurname, userEmail, userpassword,
    userTypeId, userAdmin, userPrimary, userQuestion)
    VALUES
    (?,?,?,?,?,?,?,?,?)
");

$insert -> bind_param (
    "issssiiis",
    $id, $userName, $userSurname, $userEmail, $userPassword, 
    $userTypeId, $userAdmin, $userPrimary, $userQuestion1
);

$insert -> execute();



$userId = $master -> insert_id;

// insert

$insert = $master -> prepare ("
    INSERT INTO user2
    (subscriberId, userName, userSurname, userEmail, userpassword,
    userTypeId, userAdmin, userQuestion)
    VALUES
    (?,?,?,?,?,?,?,?)
");

$insert -> bind_param (
    "issssiis",
    $id, $riskPartnerName, $riskPartnerSurname, $riskPartnerEmail, $riskPartnerPassword,
    $userTypeId, $riskPartnerAdmin,  $userQuestion2
);

$insert -> execute();





// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=create&n=added&id={$id}'</script>";
