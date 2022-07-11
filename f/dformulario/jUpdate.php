<?php

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';

// select
$_client = mysqli_query($connection, "
    SELECT * FROM c1
    WHERE c1Id = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$c1Id = $client -> c1Id;
$procesado = $client -> c1Procesado;



// select

$_c = mysqli_query($masterr, "
    SELECT * FROM categorias
    WHERE diagnosticoId = '" . $_GET["d"] . "'
    AND categoriasStatus > 0
");
$_c = mysqli_query($master, "
    SELECT * FROM c3
    WHERE c1Id = '" . $c1Id  . "'
");



$sd = "localhost";
$ud = "sagracom";
$pd = "Sagra2019";
$dd = 'sagracom_d'. $_GET["d"];

$mastera = new mysqli($sd, $ud, $pd, $dd);

//select
$_cp = mysqli_query($mastera, "
    SELECT * FROM r
    WHERE c1Id = '" . $_GET["cid"] . "'
");



// view

require_once '../v/dformulario/jUpdate.php';