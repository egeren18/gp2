<?php

// connection

include '../connection.php';

// module

$module = 'consulta';
$id = '75';
// select
$_permiso = mysqli_query($master, "
    SELECT * FROM permiso
    WHERE userId = '" . $_SESSION["userId"] . "'
    AND moduleId = '" . $id . "'
");
$permiso = mysqli_fetch_array($_permiso);

// set fields
$d = $permiso["designatedId"];

// select

$_c = mysqli_query($master, "
    SELECT * FROM consulta
    INNER JOIN department
    ON consulta.departmentId = department.departmentId
    WHERE consultaId = '" . $_GET["id"] . "'
");
$c = mysqli_fetch_array($_c);

// set fields
$grupo = $c["departmentName"];




$consulta = mysqli_query($master, "
    SELECT * FROM consulta
    WHERE consultaId = '" . $_GET["id"] . "'
");


$r_consulta = mysqli_fetch_array($consulta);


// set fields
$consultaId = $r_consulta["consultaId"];
$titulo = $r_consulta["consultaName"];
$consultaText = $r_consulta["consultaText"];
$cat = $r_consulta["cat"];
$consultaTextA = $r_consulta["consultaTextA"];
$s = $r_consulta["consultaStatus"];
$sName = $r_consulta["subs"];
$name = $r_consulta["nombre"];
$nameA = $r_consulta["nombreA"];


$tA = mysqli_query($master, "
    SELECT * FROM consulta
    WHERE consultaId = '" . $_GET["id"] . "'
");

$r_tA = mysqli_fetch_array($tA);



// view



require_once '../v/consulta/jUpdate.php';
