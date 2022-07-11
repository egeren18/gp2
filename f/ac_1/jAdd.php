<?php

// connection

include '../connection.php';

// var

$n = $_GET["n"] ?? '';

// select

$_client = mysqli_query(
    $connection,
    "SELECT * FROM client
    WHERE clientStatus = 1
");

// select

$_service = mysqli_query(
    $connection,
    "SELECT * FROM service
    WHERE serviceStatus = 1
");

// select

$_user = mysqli_query(
    $connection, "
    SELECT * FROM user
    WHERE userAdmin = 1
    AND userStatus = 1
");

// view

include '../plugins/toast/toast.php';

switch ($n) {

    case 'changeStatus':
        echo $changeStatus;
        require_once '../v/ac/jAdd.php';
        break;

    case 'validAc':
        echo $validAc;
        require_once '../v/ac/jAdd.php';
        break;

    case 'onDevelopment':
        echo $onDevelopment;
        require_once '../v/ac/jAdd.php';
        break;

    default:
        require_once '../v/ac/jAdd.php';
        break;

}
