<?php

// connection

include '../connection.php';
include '../connection2.php';
// module

$module = 'project';

$c = $_GET["c"];
$serviceId = $_GET["serviceId"];
$amId = $_GET["amId"];
$md = $_GET["md"];

$vv=$c.'_'.$serviceId.'_'.$md;


$obs = $_POST['obs'];
$userId =$_SESSION["userId"];
$d = date('d-m-y / g:i a');

$completado = $_POST['completado'];
if ($completado == null){
$completado = 2;    
}
$update = $pquest -> prepare ("
    UPDATE repuesta$vv
    SET
    obs = ?,
    projectReviewerId = ?,
    projectReviewerDate	 = ?,
    statusId = ?
    WHERE
    amId = ?
");	

$update -> bind_param (
    "sisii",
    $obs, $userId, $d ,$completado, $amId
);

$update -> execute();


    
echo "<script> window.location='../c/project.php?m=planning&c={$c}&serviceId={$serviceId}&md={$md}&n=added'</script>";  
    
    