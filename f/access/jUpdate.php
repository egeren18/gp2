<?php

// connection

include '../connection.php';

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userId = '" . $_GET["uid"] . "'
");

$user = $_user -> fetch_object();

// select

$_module = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN access
    ON module.moduleId = access.moduleId
    AND access.userId = '" . $_GET["uid"] . "'
    WHERE module.moduleStatus = 1
    AND module.moduleId <> 1
    ORDER BY jAccess DESC, module.moduleName ASC
");

// view

require_once '../v/access/jUpdate.php';