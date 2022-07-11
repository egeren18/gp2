<?php

// connection

include '../connection.php';

// module

$module = 'accessSubscriber';

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
    AND user.userAdmin <> 0
    AND user.userStatus = 1
");

// select

$_access = mysqli_query($master, "
    SELECT * FROM access
    INNER JOIN module
    ON access.moduleId = module.moduleId
    INNER JOIN user
    ON access.userId = user.userId
    WHERE user.userId = '" . $_SESSION["userId"] . "'
    AND module.moduleController = '" . $module . "'
");

$access = $_access -> fetch_object();

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"] ?? '';

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/accessSubscriber/jUser.php';
        break;
    
    case 'updated':
        echo $updated;
        require_once '../v/accessSubscriber/jUser.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/accessSubscriber/jUser.php';
        break;

    default:
        require_once '../v/accessSubscriber/jUser.php';
        break;

}
