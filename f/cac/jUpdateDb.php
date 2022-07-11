<?php
// connection

include '../connection.php';

// module
$module = 'cac';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';
$c = $_GET["cuestionarioId"];
$tsacId = $_GET["tsacId"];
$cuestionarioId = $_GET["cuestionarioId"];
$cacId = $_GET["cacId"];
$cacName = $_POST["cacName"];
$date = date('d-m-y / g:i a');
$g = $_GET["g"];


    $update = $tipoc -> prepare ("
    UPDATE cuestionario
    SET
    cacName = ?,
    date = ?
    WHERE
    cacId = ?
");	

$update -> bind_param (
    "ssi",
    $cacName, $date ,$cacId
);

$update -> execute();


$_cma = mysqli_query($tipomc, "
            SELECT * FROM tipo_de_cuestionario_$tsacId
        ");  
$vcontador = 0;
while($m = $_cma -> fetch_object()){
    $vcontador++;
    $update = $tipoc -> prepare ("
    UPDATE cuestionario1_$vcontador
    SET
    cacName = ?,
    date = ?
    WHERE
    cacId = ?
");	

$update -> bind_param (
    "ssi",
    $cacName, $date ,$cacId
);

$update -> execute();

}




if($g == 1){echo "<script> window.location='../c/{$module}.php?m=general&n=updated&tsacId={$tsacId}'</script>";}
if($g == 2){echo "<script> window.location='../c/{$module}.php?m=cac&n=updated&tsacId={$tsacId}&cuestionarioId={$c}'</script>";}