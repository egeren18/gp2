<?php

// connection

include '../connection.php';
include '../connection2.php';

// module

$module = 'termycond';
$action = 'add';
//declarar variables que se van a utilizar 
// var

$clientId = $_GET['clientId'];
$serviceId = $_GET['serviceId'];
$termycondId = $_GET['termycondId'];
$teamId =$_GET['teamId'];
$s = 0;

$update = $connection -> prepare ("
    UPDATE tteam
    SET
    tteamStatusId = ?
    WHERE
    teamId = ?
");	

$update -> bind_param (
    "ii",
    $s, $teamId
);

$update -> execute();



    // view

    echo "<script> window.location='../c/{$module}.php?m=team&n=added&cid={$termycondId}&clientId={$clientId}&serviceId={$serviceId}'</script>";