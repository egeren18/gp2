<?php

// connection

include '../connection.php';

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userId = '" . $_GET["id"] . "'
");

$user = $_user -> fetch_object();

// select

$_module = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN access
    ON module.moduleId = access.moduleId
    WHERE module.moduleStatus = 1
    AND access.userId = '" . $_GET["id"] . "'
    ORDER BY jList DESC, module.moduleName ASC
");

// view

require_once '../v/access/jUpdate.php';
