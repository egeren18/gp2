<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables.
 */


$aid = $_GET['a'];

$dsr = $_POST['dsr'];
if($dsr == 1){
    $v = 'Negado';
}
if($dsr == 2){
    $v = 'Aprovado';
}
// update
    

$update = $connection -> prepare ("
    UPDATE tracingopinion
    SET
    decisionSr = ?
    WHERE
    acId = ?
    ");	

    $update -> bind_param (
        "ii",
        $dsr, $aid
    );

    $update -> execute();
    
    $t = 1 ;
    $d = date('Y-m-d');
    $risk = $_GET["risk"] ;
    
    $update = $connection -> prepare ("
    UPDATE ac
    SET
    terminado = ?,
    fterminado= ?,
    risk = ?,
    Decision = ?
    WHERE
    acId = ?
    ");	

    $update -> bind_param (
        "isisi",
        $t, $d, $risk, $v, $aid
    );

    $update -> execute();
    
    
    
    
    
    
    
    
echo "<script>window.location='../c/ac.php?m=index&n=updated'</script>";    