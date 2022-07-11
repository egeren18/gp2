<?php

// connection

include '../connection.php';
include '../connection2.php';
// module

$module = 'project';
$c = $_GET["c"];
$i = $_GET["i"];



    // update

    if (isset($_POST['moduleId1'])){

        foreach ($_POST['moduleId1'] as $key => $value) {

            $moduleId = $value;
            $jRead = ($_POST['jRead1'][$value] ) == true ? 1 : 0;
          

            $update = $connection -> prepare ("
                UPDATE test SET
                a1 = ?
                WHERE
                srubroId = ?
            ");	

            $update -> bind_param (
                "ii",
                 $jRead, $moduleId
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
                a2 = ?
                WHERE
                srubroId = ?
            ");	

            $update -> bind_param (
                "ii",
                 $jRead, $moduleId
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
                a3 = ?
                WHERE
                srubroId = ?
            ");	

            $update -> bind_param (
                "ii",
                 $jRead, $moduleId
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
                a4 = ?
                WHERE
                srubroId = ?
            ");	

            $update -> bind_param (
                "ii",
                 $jRead, $moduleId
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
                a5 = ?
                WHERE
                srubroId = ?
            ");	

            $update -> bind_param (
                "ii",
                 $jRead, $moduleId
            );

            $update -> execute();

        }
    
}   if (isset($_POST['moduleId6'])){

        foreach ($_POST['moduleId6'] as $key => $value) {

            $moduleId = $value;
            $jRead = ($_POST['jRead6'][$value] ) == true ? 1 : 0;
          

            $update = $connection -> prepare ("
                UPDATE test SET
                a6 = ?
                WHERE
                srubroId = ?
            ");	

            $update -> bind_param (
                "ii",
                 $jRead, $moduleId
            );

            $update -> execute();

        }
    
}   if (isset($_POST['moduleId7'])){

        foreach ($_POST['moduleId7'] as $key => $value) {

            $moduleId = $value;
            $jRead = ($_POST['jRead7'][$value] ) == true ? 1 : 0;
          

            $update = $connection -> prepare ("
                UPDATE test SET
                a7 = ?
                WHERE
                srubroId = ?
            ");	

            $update -> bind_param (
                "ii",
                 $jRead, $moduleId
            );

            $update -> execute();

        }
    
}
// view

    echo "<script> window.location='../c/{$module}.php?m=question&p=s&c={$c}&i={$i}'</script>";
    