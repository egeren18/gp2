<?php

// connection

include '../connection.php';

// select

$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $_GET["id"] . "'
");

$service = $_service -> fetch_object();

// view

require_once '../v/service/jDelete.php';
