<?php

// connection

include '../connection.php';

// module

$module = 'notification';

// select

$_notification = mysqli_query($master, "
    SELECT * FROM notification
    ORDER BY notificationId DESC
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

$n = $_GET["n"];

switch ($n) {

    case 'updated':
        echo $updated;
        require_once '../v/notification/jIndex.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/notification/jIndex.php';
        break;

    default:
        require_once '../v/notification/jIndex.php';
        break;
}
