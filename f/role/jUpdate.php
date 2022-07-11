<?php

// connection

include '../connection.php';

// module

$module = 'role';

// select

$_role = mysqli_query($master, "
    SELECT * FROM role
    WHERE roleId = '" . $_GET["id"] . "'
");

$role = $_role -> fetch_object();

// view

require_once '../v/role/jUpdate.php';
