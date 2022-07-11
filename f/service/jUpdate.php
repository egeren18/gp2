<?php

// connection

include '../connection.php';

// module

$module = 'service';

// select

$_nature = mysqli_query($master, "
    SELECT * FROM nature
    WHERE natureStatus = 1
    ORDER BY natureName
");

// select

$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $_GET["id"] . "'
");

$service = $_service -> fetch_object();

// view

require_once '../v/service/jUpdate.php';
