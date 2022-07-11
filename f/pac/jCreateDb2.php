<?php

// connection

include '../connection.php';

// module
$module = 'pac';
$action = 'update';

// var
//GET
$s = $_GET["serviceId"];
$pacId = $_GET["pacId"];
//POST
$pacName = $_POST['pacName'];
$pap = $_POST['pap'];
$status = 1;
// update

$update = $rer -> prepare ("
    UPDATE m$s
    SET
    pacName = ?,
    pap = ?,
    status = ?
    WHERE
    pacId = ?
");	

$update -> bind_param (
    "ssii",
    $pacName, $pap, $status, $pacId
);

$update -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=list&n=updated&pid={$s}'</script>";
