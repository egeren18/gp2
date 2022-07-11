<?php

// connection

include '../connection.php';

// module

$module = 'pac';
$action = 'add';

// var
$d = $_POST['serviceId'];
$cac = $_POST['cacId'];
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$s = 0;
$date = date('d-m-y / g:i a');

//conexion 
$sMrer = "localhost";
$uMrer = "sagracom_crear";
$pMrer = "Sagra2507.";
$dMrer = 'sagracom_modelos_cuestionarios';
$rer = new mysqli($sMrer, $uMrer, $pMrer, $dMrer);
 

$_m1 = mysqli_query($rer, "
    SELECT * FROM m$d
    WHERE pacStatus = 1 
");
$contador =0;
while($m1 = $_m1 -> fetch_object())
{
$contador++;    
}
$contador++;

    $insert = $rer  -> prepare ("
            INSERT INTO m$d
            (pacId, serviceId, cacId ,pacName, pap, date, access)
            VALUES
            (?,?,?,?,?,?,?)
        ");

        $insert -> bind_param (
            "iiisssi",
            $contador, $d, $cac, $p1, $p2 ,$date,  $s
        );

        $insert -> execute();
        $id = $master -> insert_id;







    echo "<script> window.location='../c/{$module}.php?m=list&n=added&pid={$d}'</script>";

