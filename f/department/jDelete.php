<?php

// connection

include '../connection.php';

// select

$_department = mysqli_query($master, "
    SELECT * FROM department
    WHERE departmentId = '" . $_GET["id"] . "'
");

$department = $_department -> fetch_object();

// view

require_once '../v/department/jDelete.php';
