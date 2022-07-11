<?php

// connection

include '../connection.php';
include '../connection2.php';

// select

$_ac = mysqli_query($connection, "
    SELECT * FROM ac
    INNER JOIN client
    ON ac.clientId = client.clientId
    WHERE ac.acStatus = 1
");

// notify

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/ac/jIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/ac/jIndex.php';
        break;

    case 'deniedAc':
        echo $deniedAc;
        require_once '../v/ac/jIndex.php';
        break;

    default:
        require_once '../v/ac/jIndex.php';
        break;
}
