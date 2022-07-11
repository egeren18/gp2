<?php

// connection

include '../connection.php';

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userId = '" . $_GET['uid'] . "'
");

$user = $_user -> fetch_object();

// select

$_module = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN access
    ON module.moduleId = access.moduleId
    WHERE module.moduleStatus = 1
    AND access.userId = '" . $_SESSION["userId"] . "'
    AND moduleType = 3
    ORDER BY jList DESC, module.moduleName ASC
");
    
// select

$_audit = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN access
    ON module.moduleId = access.moduleId
    WHERE module.moduleStatus = 1
    AND access.userId = '" . $_SESSION["userId"] . "'
    AND moduleType = 4
    ORDER BY jList DESC, module.moduleName ASC
");

// select

$_administration = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN access
    ON module.moduleId = access.moduleId
    WHERE module.moduleStatus = 1
    AND access.userId = '" . $_SESSION["userId"] . "'
    AND moduleType = 5
    ORDER BY jList DESC, module.moduleName ASC
");

// select

$_rrhh = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN access
    ON module.moduleId = access.moduleId
    WHERE module.moduleStatus = 1
    AND access.userId = '" . $_SESSION["userId"] . "'
    AND moduleType = 6
    ORDER BY jList DESC, module.moduleName ASC
");

// view

require_once '../v/accessSubscriber/jCreate.php';
