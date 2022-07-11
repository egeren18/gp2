<?php

// connection

include '../connection.php';
include '../connection2.php';

// var

$cid = $_POST["clientId"];
$uid = $_SESSION["userId"];

// select
// pura conexiones para declarar las llaves y ipmprimir info en la visual
$_client = mysqli_query($connection, "SELECT * FROM client WHERE clientId = '" . $cid . "'");
$client = $_client -> fetch_object();

// select

$_ac = mysqli_query($connection, "SELECT * FROM ac INNER JOIN client ON ac.clientId = client.clientId");
$ac = $_ac -> fetch_object();

// select

$_service = mysqli_query($master, "SELECT * FROM service WHERE serviceId = '" . $ac -> serviceId . "'");
$service = $_service -> fetch_object();

// view

require_once '../v/project/jDetail.php';
