<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables.
 */

date_default_timezone_set("America/Caracas");
$designate = $_GET['r'];
$aid = $_GET['aid'];
$qid = $_GET['qid'];
$iid = $_GET['iid'];
$risk = $_GET['risk'];
$important = isset($_POST['important']) == true ? 1 : NULL;
$statusId = isset($_POST['completed']) == true ? 2 : 1;
$acDoerId = $_SESSION['userId'];

$acDoerDate = date('d-m-y / g:i a');

/*
 * Es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.
 */

switch ($risk) {
    
    case 1:
        
        $_prisk = mysqli_query($acq, "SELECT * FROM priskq$aid WHERE access = 1");
        $acumulador = 0;




        while($prisk = $_prisk -> fetch_object()){
        $acumulador++;


        /*
         * Variables.
         */

        $i1 =  $_POST['i'.$acumulador];
        $r1 = $_POST['r'.$acumulador];
        $d1 = $_POST['d'.$acumulador];
        $a1 = $_POST['a'.$acumulador];
        /*
         * Realiza un registro en la base de datos.
         */        
        
        $insert = $acq -> prepare ("INSERT INTO priskr$aid (acId, i, r, d, a) VALUES (?,?,?,?,?)");
        $insert -> bind_param ("iiiss", $aid, $i1, $r1, $d1, $a1);
        $insert -> execute();



        }


        /*
         * Realiza un registro en la base de datos.
         */

        $insert = $acq -> prepare ("INSERT INTO acr$aid (acId, acQId, acIId, important, acDoerId, acDoerDate, statusId) VALUES (?,?,?,?,?,?,?)");
        $insert -> bind_param ("iiiiisi", $aid, $qid, $iid, $important, $acDoerId, $acDoerDate, $statusId);
        $insert -> execute();
        break;

    default:
        
        /*
         * Variables.
         */

        $a1 = $_POST['a1'];

        if ($aid == 1 && isset($_POST["a2"])) {
            $a2 = isset($_POST['a2']) == true ? $_POST['a2'] : NULL;
        }
        else {
            $a2 = NULL;
        }

        $a3 = isset($_POST['a3']) ? $_POST['a3'] : NULL;

        /*
         * Realiza un registro en la base de datos.
         */



        $insert = $acq -> prepare ("INSERT INTO acr$aid (acId, acQId, acIId, a1, a2, a3, important, acDoerId, acDoerDate, statusId) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $insert -> bind_param ("iiiiisiisi", $aid, $qid, $iid, $a1, $a2, $a3, $important, $acDoerId, $acDoerDate, $statusId);
        $insert -> execute();
        break;

}

/*
 * Variables.
 */

$userId = $_SESSION["userId"];
$module = 'AcAnswer';
$action = 'Create';
$itemId = $iid;

/*
 * Realiza un registro en la base de datos.
 */

$trace = $connection -> prepare("INSERT INTO trace (userId, module, action, itemId, date) VALUES (?,?,?,?,?)");
$trace -> bind_param("issis", $userId, $module, $action, $itemId, $acDoerDate );
$trace -> execute();

$moduleac = 'Ac';
$actionac = 'iniciar';
$actionac2 = 'Completar';

/*
 * Realiza un registro en la base de datos.
 */

    $traceac = $connection -> prepare("INSERT INTO traceac (userId, module, action, itemId, ac, designatedId, date ) VALUES (?,?,?,?,?,?,?)");
    $traceac -> bind_param("issiiis", $userId, $moduleac, $statusId, $itemId, $aid, $designate, $acDoerDate);
    $traceac -> execute();


echo "<script> window.location='../c/ac.php?m=questionnaire1&aid={$aid}&n=added'</script>";