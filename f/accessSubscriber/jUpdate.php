<?php

// connection

include '../connection.php';

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    INNER JOIN subscriber
    ON user.subscriberId = subscriber.subscriberId
    WHERE user.userId = '" . $_GET["uid"] . "'
");

$user = $_user -> fetch_object();

// select

$_module = mysqli_query($master, "
    SELECT * FROM module
    RIGHT JOIN access
    ON module.moduleId = access.moduleId
    WHERE module.moduleStatus = 1
    AND module.userTypeId = 2
    AND module.moduleType > 3
    AND access.userId = '" . $_GET["uid"] . "'
    ORDER BY jList DESC, module.moduleName ASC
");

// view

require_once '../v/accessSubscriber/jUpdate.php';
