<?php

// connection

include '../connection.php';
include '../connection2.php';

// access

include '../allow.php';

// select

$d = mysqli_query($master, "
    SELECT * FROM modelo
    WHERE modeloId = '" . $_GET['cid'] .  "'
");
$d2 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $_GET['cid'] .  "'
");

// view

require_once '../v/pac/jCreate.php';
