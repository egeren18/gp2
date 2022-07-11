<?php

// connection

include '../connection.php';
include '../connection2.php';

// access

include '../allow.php';

// select

$_m1 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE pacStatus = 1 AND
    version = '" . $_GET['version'] . "' AND
    pacId = '" . $_GET['pacId']  . "' AND 
    cacId = '" . $_GET['cacId'] ."' AND
    serviceId = '" . $_GET['serviceId'] . "'
");
$m1 = $_m1 -> fetch_object();
$pacId = $m1 -> pacId;
$pacName = $m1 -> pacName;
$pap = $m1 -> pap;
$date = $m1 -> date;
$version = $m1 -> version;
$serviceId = $m1 -> serviceId;
$mId = $m1 -> mId;

$v = $version - 1 ;

// select

$_m2 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE pacId = '" . $pacId . "' AND
    version = '" . $v . "' 
");
$m2 = $_m2 -> fetch_object();
$pacId2 = $m2 -> pacId;
$pacName2 = $m2 -> pacName;
$pap2 = $m2 -> pap;
$date2 = $m2 -> date;
$version2 = $m2 -> version;


// view

require_once '../v/pac/jCreate3.php';
