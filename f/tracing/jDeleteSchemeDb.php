<?php
          
/* connection *****************************************************************/

include '../connection.php';
          
/* var ************************************************************************/

$acId = $_GET['c'];
$tracingSchemeId = $_GET['i'];
          
/* delete *********************************************************************/

$delete = $connection -> prepare ("
    DELETE FROM tracingscheme
    WHERE
    tracingSchemeId = ?
");
$delete -> bind_param (
    "i",
    $tracingSchemeId
);
$delete -> execute();

/* trace **********************************************************************/

$userId = $_SESSION["userId"];
$module = 'AC Scheme';
$action = 'Delete';
$itemId = $tracingSchemeId;

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

//echo "<body><script> window.location='../c/tracing.php?m=detail&c=" . $acId . "&n=deleted'</script>";
echo "<body><script>window.history.go(-1);</script>";