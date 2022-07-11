<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM modelo
    WHERE modeloId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$diagnosticoName = $client -> modeloName;

// view

require_once '../v/sac/jUpdate.php';