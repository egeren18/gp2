<?php

// connection

include '../connection.php';

// module

$module = 'status';

// select

$_status = mysqli_query($master, "
    SELECT * FROM status
    WHERE statusId = '" . $_GET["id"] . "'
");

$status = $_status -> fetch_object();

// view

require_once '../v/status/jUpdate.php';
