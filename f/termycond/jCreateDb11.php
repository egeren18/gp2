<?php

// connection

include '../connection.php';
include '../connection2.php';

// module

$module = 'termycond';
$action = 'add';
//declarar variables que se van a utilizar 
// GET
$termycondId = $_GET["termycondId"];
$serviceId = $_GET["serviceId"];
$clientId = $_GET["clientId"];
$ii = 1;

// POST

$f1 = $_POST['fecha1'];
$f2 = $_POST['fecha2'];
$f3 = $_POST['fecha3'];
$f4 = $_POST['fecha4'];
$f5 = $_POST['fecha5'];
$f6 = $_POST['fecha6'];
$f7 = $_POST['fecha7'];
$f8 = $_POST['fecha8'];
$f9 = $_POST['fecha9'];
$f10 = $_POST['fecha10'];
$f11 = $_POST['fecha11'];
$f12 = $_POST['fecha12'];


$update = $connection-> prepare ("
    UPDATE frecuencia
    SET
    f1 = ?,
    f2 = ?,
    f3 = ?,
    f4 = ?,
    f5 = ?,
    f6 = ?,
    f7 = ?,
    f8 = ?,
    f9 = ?,
    f10 = ?,
    f11 = ?,
    f12 = ?
    WHERE
    termycondId	 = ? 
");	

$update -> bind_param    (
    "ssssssssssssi",
   $f1, $f2, $f3, $f4, $f5, $f6, $f7, $f8, $f9, $f10, $f11, $f12, $termycondId 
);

$update -> execute();

    
echo "<script> window.location='../c/{$module}.php?m=create2&n=added&termycondId={$termycondId}&iid=2'</script>";