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

$_f = mysqli_query($pquest, "
    SELECT * FROM permisos34_1_4
    WH amId = '" . $amId . "'
");

//whilepara meter permisos   
$m1 = $_f -> fetch_object();

$frecuencia = $m1 -> frecuencia;



    $insert = $connection -> prepare ("
        INSERT INTO ractivo
        (tipoId, projectId, amId, rubroId, monto1, monto2, obs, frecuencia)
        VALUES
        (?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiiis",
     $a, $c, $amId, $rubroId, $monto1, $monto2, $o, $frecuencia
    );

    $insert -> execute();


    echo "<script> javascript: history.go(-1);</script>"; 