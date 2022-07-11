<?php

// module

$module = 'userSubscriber';
$moduleId = 8;

// connection

include '../connection.php';
include '../allow.php';

// select

$_subscriber = mysqli_query($master, "
    SELECT * FROM subscriber
    WHERE subscriberStatus = 1
    AND subscriberId <> 1
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

require_once '../v/userSubscriber/jIndex.php';
