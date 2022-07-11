<?php

// connection

include '../connection.php';

//var GET
$cid = $_GET["cid"];

$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $cid ."'
");
$service = $_service -> fetch_object();
$serviceName = $service -> serviceName;

$_cp1 = mysqli_query($master, "
    SELECT * FROM mid
    WHERE cacId = 1
");
$_cac1 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE cacId = 1
");


require_once '../v/scproject/jCreate.php';
