<?php

// module

$module = 'subscription';

// connection

include '../connection.php';
include '../allow.php';

// var

$n = $_GET["n"];

// select

$_subscription = mysqli_query($master, "
    SELECT * FROM subscription
    WHERE subscriptionStatus = 1
");

// view

include '../plugins/toast/toast.php';

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/subscription/jIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/subscription/jIndex.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/subscription/jIndex.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/subscription/jIndex.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/subscription/jIndex.php';
        break;

    default:
        require_once '../v/subscription/jIndex.php';
        break;

}
