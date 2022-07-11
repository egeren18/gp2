<?php

// connection

include '../connection.php';

// module

$module = 'comanual';
$action = 'add';

//variables
$comanualName = $_POST["comanualName"];
$comanualText = $_POST["comanualText"];
$comanualCo = $_POST["comanualCo"]; 

    // insert
    $insert = $manuales -> prepare ("
        INSERT INTO comanual
        (comanualName, comanualText, comanualCo)
        VALUES
        (?,?,?)
    ");

    // configure parameters
    $insert -> bind_param (
        "sss",
        $comanualName, $comanualText, $comanualCo
    );

    // execute
    $insert -> execute();




  echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";