<?php

/* connection *****************************************************************/

include '../connection.php';

/* var ************************************************************************/

$acId = $_GET["c"];
$tracingSchemeId = $_GET["i"];
$invoiceDate = $_POST['invoiceDate'];
$quantity = $_POST['quantity'];
$amount = $_POST['amount'];
$currencyId = $_POST['currencyId'];

/* update *********************************************************************/

$update = $connection -> prepare ("
    UPDATE tracingscheme
    SET
    invoiceDate = ?,
    quantity = ?,
    amount = ?,
    currencyId = ?
    WHERE
    tracingSchemeId = ?
");
$update -> bind_param (
    "sssii",
    $invoiceDate, $quantity, $amount, $currencyId, $tracingSchemeId
);
$update -> execute();

/* trace **********************************************************************/

$userId = $_SESSION["userId"];
$module = 'AC Scheme';
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

echo "<body><script>window.history.go(-2);</script>";
//echo "<body><script> window.location='../c/tracing.php?m=detail&c=" . $acId . "&n=updated'</script>";
