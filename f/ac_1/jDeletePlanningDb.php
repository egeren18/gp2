<?php
          
/* connection *****************************************************************/

include '../connection.php';
          
/* var ************************************************************************/

$acId = $_GET['c'];
$tracingPlanningId = $_GET['i'];
          
/* delete *********************************************************************/

$delete = $connection -> prepare ("
    DELETE FROM tracingplanning
    WHERE
    tracingPlanningId = ?
");
$delete -> bind_param (
    "i",
    $tracingPlanningId
);
$delete -> execute();

/* trace **********************************************************************/

$userId = $_SESSION["userId"];
$module = 'AC Planning';
$action = 'Delete';
$itemId = $tracingPlanningId;

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

echo "<body><script> window.location='../c/ac.php?m=item&c=" . $acId . "&q=" . $q . "&n=deleted'</script>";
