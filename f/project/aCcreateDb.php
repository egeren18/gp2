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


$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];
$a5 = $_POST['a5'];
$a6 = $_POST['a6'];
$a7 = $_POST['a7'];
$a8 = $_POST['a8'];
$a9 = $_POST['a9'];
$a10 = $_POST['a10'];
$a11 = $_POST['a11'];
$a12 = $_POST['a12'];
$a13 = $_POST['a13'];
$a14 = $_POST['a14'];
$a15 = $_POST['a15'];
$a16 = $_POST['a16'];
$a17 = $_POST['a17'];
$a18 = $_POST['a18'];
$a19 = $_POST['a19'];
$a20 = $_POST['a20'];
$userId =$_SESSION["userId"];
$d = date('d-m-y / g:i a');

$completado = $_POST['completado'];
if ($completado == 1){
    $s = 2;
}else{
    $s = 1;
}


    $insert = $pquest -> prepare ("
        INSERT INTO repuesta$vv
        (amId,serviceId, projectId, mmodeloId, a1, a2, a3, a4, a5, a6, a7,
        a8, a9, a10, a11, a12, a13, a14, a15, a16, a17,
        a18, a19, a20, projectDoerId, projectDoerDate, statusId)
        VALUES
        (?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiissssssssssssssssssssisi",
        $amId, $serviceId, $c, $mmodeloId, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $userId, $d, $s
    );

    $insert -> execute();
    
    
echo "<script> window.location='../c/project.php?m=planning&c={$c}&serviceId={$serviceId}&md={$md}&n=added'</script>";  
    
    