<?php

/* connection *****************************************************************/

include '../connection.php';

/* var ************************************************************************/

$subscriberId = $_SESSION["subscriberId"];
$acId = $_GET["c"];

/* select *********************************************************************/

$client = mysqli_query(
    $connection,
    "SELECT * FROM ac
    INNER JOIN client
    ON ac.clientId = client.clientId
    INNER JOIN service
    ON ac.serviceId = service.serviceId
    WHERE ac.acId = '" . $acId . "'
");
$r_client = mysqli_fetch_array($client);
$clientName = $r_client["clientName"];
$serviceName = $r_client["serviceName"];

/* select *********************************************************************/

$riskPartner = mysqli_query(
    $connection,
    "SELECT * FROM user
    WHERE subscriberId = '" . $subscriberId . "'
    AND userStatus = 2
");
$r_riskPartner = mysqli_fetch_array($riskPartner);
$riskPartner = $r_riskPartner["userName"] . ' ' . $r_riskPartner["userSurname"];

/* select *********************************************************************/

$doer = mysqli_query(
    $connection,
    "SELECT * FROM user
    WHERE subscriberId = '" . $subscriberId . "'
    AND userStatus = 1
");

/* select *********************************************************************/

$reviewer = mysqli_query(
    $connection,
    "SELECT * FROM user
    WHERE userStatus = 1
    AND userAdmin = 1
");

/* select *********************************************************************/

$teamReviewer = mysqli_query(
    $connection,
    "SELECT * FROM ac
    WHERE acId = '" . $acId . "'
");
$r_teamReviewer = mysqli_fetch_array($teamReviewer);
$teamReviewer = $r_teamReviewer["acReviewerId"];

/* select *********************************************************************/

$teamDoer = mysqli_query(
    $connection,
    "SELECT * FROM ac
    WHERE acId = '" . $acId . "'
");
$r_teamDoer = mysqli_fetch_array($teamDoer);
$teamDoer = $r_teamDoer["acDoerId"];

/* view ***********************************************************************/

require_once '../v/ac/jTeamList.php';
