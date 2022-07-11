<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM diagnostico
    WHERE diagnosticoId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$diagnosticoName = $client -> diagnosticoName ;

// view

require_once '../v/diagnostico/jUpdate.php';