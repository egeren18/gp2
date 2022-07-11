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

$orName = $_POST["orName"];
$onName = $_POST["onName"];
$rN = $_POST["rN"];
$rC = $_POST["rC"];
$cG = $_POST["cG"];
$aiF = $_POST["aiF"];
$eA = $_POST["eA"];
$iC = $_POST["iC"];


    $insert = $connection -> prepare ("
        INSERT INTO riesgo
        (projectId, amId, orName, onName, rN, rC, cG, aiF, eA, iC)
        VALUES
        (?,?,?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iissiiiiii",
      $c, $amId, $orName, $onName, $rN, $rC, $cG, $aiF, $eA, $iC
    );

    $insert -> execute();

  echo "<script> javascript: history.go(-1);</script>";   



