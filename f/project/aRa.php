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
$vv=$c.'_'.$serviceId.'_'.$md;

// var
$rubroId = $_POST["rubroId"];
$text = $_POST["text"];
$monto1 = $_POST["monto1"];
$monto2 = $_POST["monto2"];
$o = $_POST["text"];
$obs = $_POST["obs"];


    $insert = $connection -> prepare ("
        INSERT INTO ractivo
        (tipoId, projectId, amId, rubroId, monto1, monto2, obs)
        VALUES
        (?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiiis",
     $a, $c, $amId, $rubroId, $monto1, $monto2, $o
    );

    $insert -> execute();


echo "<script> window.location='../c/project.php?m=ccreate&p=p&c={$c}&amId={$amId}&serviceId={$serviceId}&md={$md}'</script>";  