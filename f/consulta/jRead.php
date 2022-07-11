<?php

// connection

include '../connection.php';

// module

$module = 'consulta';

// select

$consulta = mysqli_query($master, "
    SELECT * FROM consulta
    WHERE consultaId = '" . $_GET["id"] . "'
");

$r_consulta = mysqli_fetch_array($consulta);

// set fields
$consultaId = $r_consulta["consultaId"];
$titulo = $r_consulta["consultaName"];
$consultaText = $r_consulta["consultaText"];
$consultaText2 = $r_consulta["consultaTextA"];
$cat = $r_consulta["departmentId"];
$s = $r_consulta["consultaStatus"];
$date = $r_consulta["date"];
$n = $r_consulta["nombre"];
$nA = $r_consulta["nombreA"];
$r = $r_consulta["rName"];
$subs = $r_consulta["subs"];
// view

$dp = mysqli_query($master, "
    SELECT * FROM department
    WHERE departmentId = '" . $cat . "'
");

$r_dp = mysqli_fetch_array($dp);

// set fields
$dpN = $r_dp["departmentName"];

require_once '../v/consulta/jRead.php';
