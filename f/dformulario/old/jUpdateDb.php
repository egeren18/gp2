<?php

// module
$module = 'sp';

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';

/* datos personales */
$s = $_POST['approved'];
if ($s == 3){
    $a1 = 1;
$update = $master -> prepare ("
    UPDATE gestiontalento
    SET
    a1 = ?
    WHERE
    gestiontalentoId = ?
");	

$update -> bind_param (
    "si",
    $a1, $_GET["cid"]
);
 $update -> execute();   
 
 echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
    
}



 echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
    
    
    
    
    
    