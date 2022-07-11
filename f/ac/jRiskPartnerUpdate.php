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
$sr = $_GET['sr'];
$designate = $_GET['r'];
$aid = $_GET['aid'];
$qid = $_GET['qid'];
$iid = $_GET['iid'];
if (isset($_POST['approved']) && $_POST['approved'] == TRUE) {
echo    $statusId = $_POST['approved'];
}
else {
echo     $statusId = 2;
}
$acReviewerId = $_SESSION['userId'];
$acReviewerDate = date('d-m-y / g:i a');
//$note = filter_input(INPUT_POST, 'note', FILTER_SANITIZE_STRING);
$note = $_POST["note"];
        
/*
 * Actualiza un registro en la base de datos.
 */

$update = $acq -> prepare("UPDATE acr$aid SET acSrId = ?, acSrDate = ?, note = ?, statusId = ? WHERE acId = ? AND acQId = '" . $qid . "' AND acIId = '" . $iid . "'");
$update -> bind_param("issii", $acReviewerId, $acReviewerDate, $note, $statusId, $aid);
$update -> execute();

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
$trace -> bind_param("issis", $userId, $module, $action, $itemId, $acReviewerDate);
$trace -> execute();


$moduleac = 'Ac';
$actionac = 'Devolver';
$actionac2 = 'Revisado';
if ($sr = 6){
    $designate = 6;
   
}
 $traceac = $connection -> prepare("INSERT INTO traceac (userId, module, action, itemId, ac, designatedId, date) VALUES (?,?,?,?,?,?,?)");
    $traceac -> bind_param("issiiis", $userId, $moduleac, $statusId , $itemId, $aid, $designate, $acReviewerDate);
    $traceac -> execute();

echo "<script> window.location='../c/ac.php?m=questionnaire1&aid={$aid}&n=updated'</script>";
 