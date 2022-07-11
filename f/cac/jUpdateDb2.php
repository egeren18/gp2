<?php
// connection

include '../connection.php';

// module
$module = 'sp';

$maId  = $_GET['maId'];
$serviceId  = $_GET['serviceId'];
$cacName  = $_POST['c'];

    $update = $master -> prepare ("
        UPDATE cac
        SET
        cacName = ?
        WHERE
        maId = ? 
        
    ");

    $update -> bind_param (
        "si",
        $cacName,  $maId
    );
    
// execute
$update -> execute();
         


 echo "<script> window.location='../c/{$module}.php?m=list&n=updated&pid={$serviceId}'</script>";