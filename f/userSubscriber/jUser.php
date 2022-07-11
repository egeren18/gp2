<?php

// module

$module = 'userSubscriber';
$moduleId = 8;

// connection

include '../connection.php';
include '../allow.php';

// select

$_qty = mysqli_query($master, "
    SELECT count(*) as total FROM user
    WHERE subscriberId = '" . $_GET["sid"] . "'
    AND userAdmin < 3
    AND userStatus = 1
");

$qty = mysqli_fetch_array($_qty);

// select

$_subscriber = mysqli_query($master, "
    SELECT * FROM subscriber
    WHERE subscriberId = '" . $_GET["sid"] . "'
");

$subscriber = $_subscriber -> fetch_object();

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    INNER JOIN subscriber
    ON user.subscriberId = subscriber.subscriberId
    WHERE user.subscriberId = '" . $_GET["sid"] . "'
    AND user.userStatus = 1
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/userSubscriber/jUser.php';
        break;
    
    case 'updated':
        echo $updated;
        require_once '../v/userSubscriber/jUser.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/userSubscriber/jUser.php';
        break;

    case 'exceeded':
        echo $exceeded;
        require_once '../v/userSubscriber/jUser.php';
        break;

    default:
        require_once '../v/userSubscriber/jUser.php';
        break;

}
