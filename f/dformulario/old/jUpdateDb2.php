<?php
// connection

include '../connection.php';

// module
$module = 'dformulario';
$a = $_POST['approved'];
if ($a == 1) {
$c1Procesado = 1;
$update = $master -> prepare ("
    UPDATE c1
    SET
    c1Procesado = ?
    WHERE
    c1Id = ?
");	

$update -> bind_param (
    "ii",
    $c1Procesado, $_GET["cid"]
);
$update -> execute();
echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
}
else {
echo "<script> window.location='../c/{$module}.php?m=index'</script>";
}

 
    
    
    
    
    
    