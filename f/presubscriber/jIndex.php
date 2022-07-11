<?php

// module

$module = 'presubscriber';
$moduleId = 82;

// connection

include '../connection.php';
include '../allow.php';

// select

$_subscriber = mysqli_query($master, "
    SELECT * FROM subscriber2
    INNER JOIN subscription
    ON subscriber2.subscriptionId = subscription.subscriptionId
    WHERE subscriber2.subscriberStatus = 1
    AND subscriber2.subscriberId > 0
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/presubscriber/jIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/presubscriber/jIndex.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/presubscriber/jIndex.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/presubscriber/jIndex.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/presubscriber/jIndex.php';
        break;

    default:
        require_once '../v/presubscriber/jIndex.php';
        break;

}
