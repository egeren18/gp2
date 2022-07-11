<?php

// connection

include '../connection.php';
include '../connection2.php';
// module

$module = 'project';
$c = $_GET["c"];
$i = $_GET["i"];
$f1 = 1;
$f2 = 2;
$f3 = 3;
$f4 = 4;
$f5 = 5;
$f6 = 6;


    // update

    if (isset($_POST['moduleId1'])){

        foreach ($_POST['moduleId1'] as $key => $value) {

            $moduleId = $value;
            $jRead = ($_POST['jRead1'][$value] ) == true ? 1 : 0;
          

            $update = $connection -> prepare ("
                UPDATE test SET
                srubroStatus = ?
                WHERE
                srubroId = ? AND frecuencia = ?
            ");	

            $update -> bind_param (
                "iii",
                 $jRead, $moduleId , $f1
            );

            $update -> execute();

        }
    
}
    if (isset($_POST['moduleId2'])){

        foreach ($_POST['moduleId2'] as $key => $value) {

            $moduleId = $value;
            $jRead = ($_POST['jRead2'][$value] ) == true ? 1 : 0;
          

            $update = $connection -> prepare ("
                UPDATE test SET
                srubroStatus = ?
                WHERE
                srubroId = ? AND frecuencia = ?
            ");	

            $update -> bind_param (
                "iii",
                 $jRead, $moduleId , $f2
            );

            $update -> execute();

        }
    
}
    if (isset($_POST['moduleId3'])){

        foreach ($_POST['moduleId3'] as $key => $value) {

            $moduleId = $value;
            $jRead = ($_POST['jRead3'][$value] ) == true ? 1 : 0;
          

            $update = $connection -> prepare ("
                UPDATE test SET
                srubroStatus = ?
                WHERE
                srubroId = ? AND frecuencia = ?
            ");	

            $update -> bind_param (
                "iii",
                 $jRead, $moduleId , $f3
            );

            $update -> execute();

        }
    
}
    if (isset($_POST['moduleId4'])){

        foreach ($_POST['moduleId4'] as $key => $value) {

            $moduleId = $value;
            $jRead = ($_POST['jRead4'][$value] ) == true ? 1 : 0;
          

            $update = $connection -> prepare ("
                UPDATE test SET
                srubroStatus = ?
                WHERE
                srubroId = ? AND frecuencia = ?
            ");	

            $update -> bind_param (
                "iii",
                 $jRead, $moduleId , $f4
            );

            $update -> execute();

        }
    
}
    if (isset($_POST['moduleId5'])){

        foreach ($_POST['moduleId5'] as $key => $value) {

            $moduleId = $value;
            $jRead = ($_POST['jRead5'][$value] ) == true ? 1 : 0;
          

            $update = $connection -> prepare ("
                UPDATE test SET
                srubroStatus = ?
                WHERE
                srubroId = ? AND frecuencia = ?
            ");	

            $update -> bind_param (
                "iii",
                 $jRead, $moduleId , $f5
            );

            $update -> execute();

        }
    
}
    if (isset($_POST['moduleId6'])){

        foreach ($_POST['moduleId6'] as $key => $value) {

            $moduleId = $value;
            $jRead = ($_POST['jRead6'][$value] ) == true ? 1 : 0;
          

            $update = $connection -> prepare ("
                UPDATE test SET
                srubroStatus = ?
                WHERE
                srubroId = ? AND frecuencia = ?
            ");	

            $update -> bind_param (
                "iii",
                 $jRead, $moduleId , $f6
            );

            $update -> execute();

        }
    
}
// view
    echo "<script> window.location='../c/{$module}.php?m=revision2&p=p&c={$c}&i={$i}&f=1&r=1'</script>";
    