<?php

// connection

include '../connection.php';

// module

$module = 'mvisual';
$action = 'add';

//variables
$cacName = $_POST["cacName"];
$cacText = $_POST["cacText"];


    // insert
    $insert = $manuales -> prepare ("
        INSERT INTO cac
        (cacName, cacText)
        VALUES
        (?,?)
    ");

    // configure parameters
    $insert -> bind_param (
        "ss",
        $cacName, $cacText
    );

    // execute
    $insert -> execute();
    $id = mysqli_insert_id($manuales);




  echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";