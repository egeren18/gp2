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
$aid = $_GET['aid'];
$qid = $_GET['qid'];
$iid = $_GET['iid'];
$risk = $_GET["risk"];
$important = isset($_POST['important']) == true ? 1 : NULL;
$statusId = isset($_POST['completed']) == true ? 2 : 1;
$acDoerId = $_SESSION['userId'];
$acDoerDate = date('d-m-y / g:i a');
$c = $_POST['completed'];
$designate = $_GET['r'];

/*
 * Es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.
 */

switch ($risk) {

    case 1:
        


            $_prisk = mysqli_query($acq, "SELECT * FROM priskr$aid ");
            $aacumulador = 0;
    
    
            while($prisk = $_prisk -> fetch_object()){
                $aacumulador++;
             $am = $prisk -> acMatrixid; 

                $i1 =  $_POST['i'.$aacumulador];
                $r1 = $_POST['r'.$aacumulador];
                $d1 = $_POST['d'.$aacumulador];
                $a1 = $_POST['a'.$aacumulador];
                
                $update = $acq -> prepare ("UPDATE priskr$aid SET r = ?, d = ?, a = ? WHERE i = ?");
                $update -> bind_param ("issi", $r1, $d1, $a1, $aacumulador);
                $update -> execute();

        }



        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $acq -> prepare("UPDATE acr$aid SET important = ?, acDoerId = ?, acDoerDate = ?, statusId = ? WHERE acId = ? AND acQId = '" . $qid . "' AND acIId = '" . $iid . "'");
        $update -> bind_param("iisii", $important, $acDoerId, $acDoerDate, $statusId, $aid);
        $update -> execute();
        
// este es el codigo referente al ID de riesgo 

$query = "SELECT COUNT(r) AS q FROM priskr$aid WHERE acId = '" . $_GET["aid"] . "' AND r > 0";
  $_qty = mysqli_query($acq, $query);
  $qty = $_qty -> fetch_object();

// ahora ya tengo cantidad de respuestas que vamos a promediar, y hago la sumatoria
//almacenando dicho valor en la variable $sum. luego el promedio es almacenado en
//la variable @$average

  $query = "SELECT SUM(r) AS s FROM priskr$aid WHERE acId = '" . $_GET["aid"] . "' AND r > 0";
  $_sum = mysqli_query($acq, $query);
  $sum = $_sum -> fetch_object();

@$average = $sum -> s / $qty -> q;

// ese resultado se ubicara ahora en alguno de los siguientes rangos y mostrara
//en pantalla el equivalente al rango en el que cayo.

switch ($average) {

    case $average < 1.5 : $average = 'Bajo';
        break;
    case $average >= 1.5 && $average < 2.5 : $average = 'Bajo - Moderado';
        break;
    case $average >= 2.5 && $average < 3.5 : $average = 'Moderado';
        break;
    case $average >= 3.5 && $average < 4.5 : $average = 'Moderado - Alto';
        break;
    case $average >= 4.5 && $average <= 5 : $average = 'Alto';
        break;
    default : $average = 'No Aplica';
        break;
}


        

        break;

    default:

        /*
         * Variables.
         */

        $a1 = isset($_POST['a1']) ? filter_input(INPUT_POST, 'a1', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $a2 = isset($_POST['a2']) ? filter_input(INPUT_POST, 'a2', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $a3 = isset($_POST['a3']) ? filter_input(INPUT_POST, 'a3', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $acq->prepare("UPDATE acr$aid SET a1 = ?, a2 = ?, a3 = ?, important = ?, acDoerId = ?, acDoerDate = ?, statusId = ? WHERE acId = ? AND acQId = '" . $qid . "' AND acIId = '" . $iid . "'");
        $update -> bind_param("issiisii", $a1, $a2, $a3, $important, $acDoerId, $acDoerDate, $statusId, $aid);
        $update->execute();

        break;

}

/*
 * Variables.
 */

$userId = $_SESSION["userId"];
$module = 'AcAnswer';
$action = 'Update';
$itemId = $iid;

/*
 * Realiza un registro en la base de datos.
 */

$trace = $connection -> prepare("INSERT INTO trace (userId, module, action, itemId, date) VALUES (?,?,?,?,?)");
$trace -> bind_param("issis", $userId, $module, $action, $itemId, $acDoerDate);
$trace -> execute();

$moduleac = 'Ac';
$actionac = 'Editar';
$actionac2 = 'Completar';

    $traceac = $connection -> prepare("INSERT INTO traceac (userId, module, action, itemId, ac, designatedId, date) VALUES (?,?,?,?,?,?,?)");
    $traceac -> bind_param("issiiis", $userId, $moduleac, $statusId, $itemId, $aid, $designate, $acDoerDate);
    $traceac -> execute();

echo "<script> window.location='../c/ac.php?m=questionnaire1&aid={$aid}&n=updated'</script>";





