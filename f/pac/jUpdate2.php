<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client2 = mysqli_query($master, "
    SELECT * FROM modelo
    WHERE modeloId = '" . $_GET["cid"] . "'
");
$client2 = $_client2 -> fetch_object();
$pid = $client2 -> modeloId;

// select


$_c = mysqli_query($rer, "
    SELECT * FROM m$pid
    WHERE pacId = '" . $_GET["pid"] . "'
");

$c = $_c -> fetch_object();
$d = $c -> pacId ;
$cacId = $c -> cacId;
$date = $c -> date;



$_cacname = mysqli_query($master, "
    SELECT * FROM cac
    WHERE serviceId = '" . $pid . "'  AND
    cacId = '" . $cacId . "'
");
$cacname = $_cacname -> fetch_object();
$cn = $cacname -> cacName;

// select



// view

require_once '../v/pac/jUpdate2.php';