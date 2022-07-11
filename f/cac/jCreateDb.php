<?php

// connection

include '../connection.php';

// module

$module = 'cac';
$action = 'add';

// var
//GET
$tsacId = $_GET['tsacId'];
//$cuestionarioId = $_GET['cuestionarioId'];
//POST
$categoriaName = $_POST['categoriaName'];
//
$date = date('d-m-y / g:i a');
//variable de control para seleccionar la tabla
$v = $tsacId.'_'.$cuestionarioId;

        $insert = $tipoc -> prepare ("
            INSERT INTO cuestionario
            (cacName, date)
            VALUES
            (?,?)
        ");

        $insert -> bind_param (
            "si",
            $categoriaName, $date
        );

        $insert -> execute();

 $_cma = mysqli_query($tipomc, "
            SELECT * FROM tipo_de_cuestionario_$tsacId
        ");  
        
$vcontador = 0;

while($m = $_cma -> fetch_object()){
    $vcontador++;
    
        $insert = $tipoc -> prepare ("
            INSERT INTO cuestionario1_$vcontador
            (cacName, date)
            VALUES
            (?,?)
        ");

        $insert -> bind_param (
            "si",
            $categoriaName, $date
        );

        $insert -> execute();

}


    
//IR A LA VISUAL    
echo "<script> window.location='../c/{$module}.php?m=index&n=added&tsacId={$tsacId}'</script>";
    

    

