<?php

// connection

include '../connection.php';

// module

$module = 'subscriber';
$action = 'update';

// var

$subscriberName = filter_var($_POST['subscriberName'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberRif = filter_var($_POST['subscriberRif'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberPhone1 = filter_var($_POST['subscriberPhone1'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberPhone2 = filter_var($_POST['subscriberPhone2'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberContactName = filter_var($_POST['subscriberContactName'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberContactSurname = filter_var($_POST['subscriberContactSurname'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberContactEmail = filter_var($_POST['subscriberContactEmail'], FILTER_SANITIZE_EMAIL);
$subscriberAddress = filter_var($_POST['subscriberAddress'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberCity = filter_var($_POST['subscriberCity'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberState = filter_var($_POST['subscriberState'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberZipCode = filter_var($_POST['subscriberZipCode'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$countryId = $_POST['countryId'];
$subscriberWebPage = filter_var($_POST['subscriberWebPage'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberUsers = filter_var($_POST['subscriberUsers'], FILTER_VALIDATE_INT);
$subscriberStart = $_POST['subscriberStart'];
$subscriberStart = date('Y-m-d', strtotime($subscriberStart));
$subscriptionId = $_POST['subscriptionId'];
$userName = filter_var($_POST["userName"], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$userSurname = filter_var($_POST["userSurname"], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$userEmail = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
$userStatus = 1;
$riskPartnerName = filter_var($_POST["riskPartnerName"], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$riskPartnerSurname = filter_var($_POST["riskPartnerSurname"], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$riskPartnerEmail = filter_var($_POST["riskPartnerEmail"], FILTER_SANITIZE_EMAIL);

// select

$_subscription = mysqli_query($master, "
    SELECT * FROM subscription
    WHERE subscriptionId = '" . $subscriptionId . "'
");

$subscription = $_subscription -> fetch_object();

// expire

$days = $subscription -> subscriptionDays;
$subscriberExpires = strtotime ($subscriberStart . '+' . $days . ' days') ;
$subscriberExpires = date ( 'Y-m-d' , $subscriberExpires );

// update

$update = $master -> prepare ("
    UPDATE subscriber SET
    subscriberName = ?,
    subscriberRif = ?,
    subscriberPhone1 = ?,
    subscriberPhone2 = ?,
    subscriberContactName = ?,
    subscriberContactSurname = ?,
    subscriberContactEmail = ?,
    subscriberAddress = ?,
    subscriberCity = ?,
    subscriberState = ?,
    subscriberZipCode = ?,
    countryId = ?,
    subscriberWebPage = ?,
    subscriberUsers = ?,
    subscriberStart = ?,
    subscriberExpires = ?,
    subscriptionId = ?
    WHERE subscriberId = ?
");

$update -> bind_param (
    "sssssssssssissssii",
    $subscriberName, $subscriberRif, $subscriberPhone1, $subscriberPhone2, $subscriberContactName,
    $subscriberContactSurname, $subscriberContactEmail, $subscriberAddress, $subscriberCity, $subscriberState,
    $subscriberZipCode, $countryId, $subscriberWebPage, $subscriberUsers, $subscriberStart,
    $subscriberExpires, $subscriptionId, $_GET["id"]
);

$update -> execute();

if (isset($_POST['jAuditModuleId'])) {

    foreach ($_POST['jAuditModuleId'] as $key => $value) {

        $jAccess = isset($_POST['jAuditAccess'][$value]) == true ? 1 : 0;

        $update = $master -> prepare ("
            UPDATE accesssubscriber SET
            jAccess = ?
            WHERE
            moduleId = ?
            AND subscriberId = ?
        ");	

        $update -> bind_param (
            "iii",
            $jAccess, $value, $_GET["id"]
        );

        $update -> execute();

    }
}

if (isset($_POST['jAdministrationModuleId'])) {

    foreach ($_POST['jAdministrationModuleId'] as $key => $value) {

        $jAccess = isset($_POST['jAdministrationAccess'][$value]) == true ? 1 : 0;

        $update = $master -> prepare ("
            UPDATE accesssubscriber SET
            jAccess = ?
            WHERE
            moduleId = ?
            AND subscriberId = ?
        ");	

        $update -> bind_param (
            "iii",
            $jAccess, $value, $_GET["id"]
        );

        $update -> execute();

    }
}

if (isset($_POST['jRrhhModuleId'])) {

    foreach ($_POST['jRrhhModuleId'] as $key => $value) {

        $jAccess = isset($_POST['jRrhhAccess'][$value]) == true ? 1 : 0;

        $update = $master -> prepare ("
            UPDATE accesssubscriber SET
            jAccess = ?
            WHERE
            moduleId = ?
            AND subscriberId = ?
        ");	

        $update -> bind_param (
            "iii",
            $jAccess, $value, $_GET["id"]
        );

        $update -> execute();

    }
}

if (isset($_POST['jSupportModuleId'])) {

    foreach ($_POST['jSupportModuleId'] as $key => $value) {

        $jAccess = isset($_POST['jSupportAccess'][$value]) == true ? 1 : 0;

        $update = $master -> prepare ("
            UPDATE accesssubscriber SET
            jAccess = ?
            WHERE
            moduleId = ?
            AND subscriberId = ?
        ");	

        $update -> bind_param (
            "iii",
            $jAccess, $value, $_GET["id"]
        );

        $update -> execute();

    }
}

if (isset($_POST['jNetModuleId'])) {

    foreach ($_POST['jNetModuleId'] as $key => $value) {

        $jAccess = isset($_POST['jNetAccess'][$value]) == true ? 1 : 0;

        $update = $master -> prepare ("
            UPDATE accesssubscriber SET
            jAccess = ?
            WHERE
            moduleId = ?
            AND subscriberId = ?
        ");	

        $update -> bind_param (
            "iii",
            $jAccess, $value, $_GET["id"]
        );

        $update -> execute();

    }
}

// update

$update = $master -> prepare ("
    UPDATE user SET
    userName = ?,
    userSurname = ?,
    userEmail = ?,
    userStatus = ?
    WHERE subscriberId = ?
    AND userAdmin = 2
");

$update -> bind_param (
    "sssii",
    $userName, $userSurname, $userEmail, $userStatus, $_GET["id"]
);

$update -> execute();

// update

$update = $master -> prepare ("
    UPDATE user SET
    userName = ?,
    userSurname = ?,
    userEmail = ?
    WHERE subscriberId = ?
    AND userAdmin = 3
");

$update -> bind_param (
	"sssi",
	$riskPartnerName, $riskPartnerSurname, $riskPartnerEmail, $_GET["id"]
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["id"]);

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
