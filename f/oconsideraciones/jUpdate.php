<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM oconsideraciones
    WHERE oconsideracionesId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$oconsideracionesName = $client -> oconsideracionesName ;

// view

require_once '../v/oconsideraciones/jUpdate.php';