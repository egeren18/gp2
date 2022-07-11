<?php

// connection

include '../connection.php';

// module

$module = 'userSubscriber';

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userId = '" . $_GET["uid"]. "'
");

$user = $_user -> fetch_object();

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

require_once '../v/userSubscriber/jUpdate.php';
