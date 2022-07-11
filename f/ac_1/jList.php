<?php

// connection

include '../connection.php';

// var

$u = $_SESSION["userId"];

// select

$_ac = mysqli_query(
    $connection,
    "SELECT * FROM ac
    INNER JOIN client
    ON ac.clientId = client.clientId
    INNER JOIN service
    ON ac.serviceId = service.serviceId
    INNER JOIN risk
    ON client.riskId = risk.riskId
    WHERE ac.acStatus = 1
");

// notify

include '../plugins/toast/toast.php';

$n = $_GET["n"] ?? '';

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/ac/jList.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/ac/jList.php';
        break;

    case 'deniedAc':
        echo $deniedAc;
        require_once '../v/ac/jList.php';
        break;

    default:
        require_once '../v/ac/jList.php';
        break;
}
