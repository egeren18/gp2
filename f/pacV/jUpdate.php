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

// select

$_client = mysqli_query($master, "
    SELECT * FROM pac
    WHERE pacId = '" . $_GET["pid"] . "'
");

$c = $_client -> fetch_object();
$d = $c -> pacId ;
$cacId = $c -> cacId;

$_cacname = mysqli_query($master, "
    SELECT * FROM cac
    WHERE cacId = '" . $cacId . "'
");
$cacname = $_cacname -> fetch_object();
$cn = $cacname -> cacName;

// select

$_audit = mysqli_query($master, "
    SELECT * FROM scpac
    WHERE pacId = '" . $d . "'
");

// view

require_once '../v/pac/jUpdate.php';