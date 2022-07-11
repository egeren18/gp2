<?php

// connection

include '../connection.php';
include '../connection2.php';

// module


$c = $_GET["c"];
$serviceId = $_GET["serviceId"];
$amId = $_GET["amId"];  
$md = $_GET["md"];
$a = $_GET["a"];
$co = $_POST["completado"];
$vv=$c.'_'.$serviceId.'_'.$md;



$update = $pquest -> prepare ("
    UPDATE mz
    SET
    statusId = ?
    WHERE
    projectId = ? and amId = ?
");	

$update -> bind_param (
    "iii",
    $co, $c, $amId
);

$update -> execute();


echo "<script> javascript: history.go(-1);</script>"; 