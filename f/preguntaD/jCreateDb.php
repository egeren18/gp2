<?php

// connection

include '../connection.php';

// module

$module = 'preguntaD';
$action = 'add';

// var
$d = $_GET['d'];
$pn = $_GET['pn'];


    $insert = $master -> prepare ("
            INSERT INTO pregunta
            (diagnosticoId, preguntaName)
            VALUES
            (?,?)
        ");

        $insert -> bind_param (
            "is",
            $d, $pn
        );

        $insert -> execute();
        $id = $master -> insert_id;
// insert

    foreach ($_POST['preguntasC'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;

        $insert = $master -> prepare ("
            INSERT INTO dcp
            (diagnosticoId, categoriasId, preguntaId, access)
            VALUES
            (?,?,?,?)
        ");

        $insert -> bind_param (
            "iiii",
            $d, $value, $id,  $jAccess
        );

        $insert -> execute();

    }






    echo "<script> window.location='../c/{$module}.php?m=list&n=added&pid={$d}'</script>";

