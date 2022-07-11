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
$qid = $_GET['q'];


$r = $_POST['r'];
$riskScId = $_POST['ris'];
$desicion= $_POST['de'];


$risk = mysqli_query(
    $master, 
    "SELECT * FROM risk
     WHERE riskId = '" . $riskScId . "'
   ");

   $r_risk  = mysqli_fetch_array($risk );

   $r1 = $r_risk["riskId"];






$ac = $connection -> prepare ("
INSERT INTO tracingopinion
(acId, riskId, decision)
VALUES
(?,?,?)
");
$ac -> bind_param (
"iis",
$aid, $r1, $desicion
);
$ac -> execute();




$sr = $connection -> prepare ("
INSERT INTO tracingriskpartneropinion
(acId, decision)
VALUES
(?,?)
");
$sr -> bind_param (
"is",
$aid, $desicion
);
$sr -> execute();




echo "<script>window.location='../c/ac.php?m=index&n=updated'</script>";    


















