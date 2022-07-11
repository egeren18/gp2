<?php

// connection

include '../connection.php';

// module

$module = 'notification';

// select

$_notification = mysqli_query($master, "
    SELECT * FROM notification
    WHERE notificationId = '" . $_GET["id"]. "'
");

$notification = $_notification -> fetch_object();

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

require_once '../v/notification/jUpdate.php';
