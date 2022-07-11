<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables.
 */


$aid = 1;
$b = $_GET['a'];
$c = $_GET['a'];
$ris = 1;
$de  = 2;


    $trace = $connection -> prepare ("
    	INSERT INTO tracingopinion
    	(acId, riskId, decision)
    	VALUES
    	(?,?,?)
    ");

    $trace -> bind_param ("iii", $aid, $ris, $de);

    $trace -> execute();


    // view

    echo "<script> window.location='javascript: history.go(-1);'</script>";