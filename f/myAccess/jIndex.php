<?php

// module

$module = 'myAccess';
$moduleId = 26;

// connection

include '../connection.php';
include '../allow.php';

// var

$n = $_GET["n"];

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    INNER JOIN subscriber
    ON user.subscriberId = subscriber.subscriberId
    WHERE user.subscriberId = '" . $_SESSION["subscriberId"] . "'
    AND user.userStatus = 1
    AND subscriber.subscriberStatus = 1
");

// view

include '../plugins/toast/toast.php';

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/myAccess/jIndex.php';
        break;
    
    case 'updated':
        echo $updated;
        require_once '../v/myAccess/jIndex.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/myAccess/jIndex.php';
        break;

    default:
        require_once '../v/myAccess/jIndex.php';
        break;

}
