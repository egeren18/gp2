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
    WHERE moduleStatus = 1
    AND moduleVisible = 1
    ORDER BY moduleName ASC
");

// view

require_once '../v/access/jAdd.php';
