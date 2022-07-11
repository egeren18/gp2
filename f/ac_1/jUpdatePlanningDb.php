<?php

/* connection *****************************************************************/

include '../connection.php';

/* var ************************************************************************/

$q = $_GET['q'];
$acId = $_GET["c"];
$tracingPlanningId = $_GET["i"];
$jobId = $_POST['jobId'];
$lineId = $_POST['lineId'];
$hour = $_POST['hour'];
$amount = $_POST['amount'];

/* update *********************************************************************/

$update = $connection -> prepare ("
    UPDATE tracingplanning
    SET
    jobId = ?,
    lineId = ?,
    hour = ?,
    amount = ?
    WHERE
    tracingPlanningId = ?
");
$update -> bind_param (
    "iiisi",
    $jobId, $lineId, $hour, $amount, $tracingPlanningId
);
$update -> execute();

/* trace **********************************************************************/

$userId = $_SESSION["userId"];
$module = 'AC Planning';
$action = 'Update';
$itemId = $acId;

$trace = $connection -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");
$trace -> bind_param (
    "issi",
    $userId, $module, $action, $itemId
);
$trace -> execute();

/* view ***********************************************************************/

echo "<body><script> window.location='../c/ac.php?m=item&c=" . $acId . "&q=" . $q . "&n=updated'</script>";
