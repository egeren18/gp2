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
$amount = $_POST['amount'];
$et = $_POST['et'];
$currencyId = $_POST['currencyId'];
$desicion2 = $_POST['desicion2'];
$horasc = $_POST['horasc'];

//variables logica ac
$important = isset($_POST['important']) == true ? 1 : NULL;
$statusId = isset($_POST['completed']) == true ? 2 : 1;


$update = $connection-> prepare ("
    UPDATE termycond
    SET
    statusId = ?,
    important = ?
    WHERE
    termycondId	 = ? AND mId = 2
");	

$update -> bind_param    (
    "iii",
   $statusId, $important, $termycondId 
);

$update -> execute();



    // view

    echo "<script> window.location='../c/{$module}.php?m=list&n=added&cid={$termycondId}&iid=2&clientId={$clientId}&serviceId={$serviceId}'</script>";