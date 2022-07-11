<?php

/* connection *****************************************************************/

include '../connection.php';

/* var ************************************************************************/

$q = $_GET['q'];
$acId = $_GET['cod'];
$jobId = $_POST['jobId'];
$lineId = $_POST['lineId'];
$hour = $_POST['hour'];
$amount = $_POST['amount'];

/* insert *********************************************************************/

$insert = $connection -> prepare ("
    INSERT INTO tracingplanning
    (acId, jobId, lineId, hour, amount)
    VALUES
    (?,?,?,?,?)
");
$insert -> bind_param (
    "iiiis",
    $acId, $jobId, $lineId, $hour, $amount
);
$insert -> execute();

/* trace **********************************************************************/

$userId = $_SESSION["userId"];
$module = 'AC Add Planning';
$action = 'Insert';
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

echo "<body><script> window.location='../c/ac.php?m=item&c=" . $acId . "&q=" . $q . "&n=added'</script>";
