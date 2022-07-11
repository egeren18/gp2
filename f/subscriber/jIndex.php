<?php

// module

$module = 'subscriber';
$moduleId = 4;

// connection

include '../connection.php';
include '../allow.php';

// select

$_subscriber = mysqli_query($master, "
    SELECT * FROM subscriber
    INNER JOIN subscription
    ON subscriber.subscriptionId = subscription.subscriptionId
    WHERE subscriber.subscriberStatus = 1
    AND subscriber.subscriberId > 1
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/subscriber/jIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/subscriber/jIndex.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/subscriber/jIndex.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/subscriber/jIndex.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/subscriber/jIndex.php';
        break;

    default:
        require_once '../v/subscriber/jIndex.php';
        break;

}
