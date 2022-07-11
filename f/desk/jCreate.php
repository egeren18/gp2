<?php

// connection

include '../connection.php';

// access

include '../allow.php';

// select

$_c = mysqli_query($master, "
    SELECT * FROM cdesk
    WHERE cDeskStatus = 1 AND
    cDeskId = '" . $_GET['cid'] . "'
");
$c = $_c -> fetch_object();
$name = $c -> cDeskName;
$id = $c -> cDeskId;

$_m = mysqli_query($master, "
    SELECT * FROM module
    WHERE cDeskId = 0 AND
    moduleType = 1
");


// view

require_once '../v/desk/jCreate.php';
