<?php

/* connection *****************************************************************/

include '../connection.php';

/* var ************************************************************************/

$q = $_GET['q'];
$acId = $_GET['cod'];
$invoiceDate = $_POST['invoiceDate'];
$quantity = $_POST['quantity'];
$amount = $_POST['samount'];
$currencyId = $_POST['scurrencyId'];

/* insert *********************************************************************/

$insert = $connection -> prepare ("
    INSERT INTO tracingscheme
    (acId, invoiceDate, quantity, amount, currencyId)
    VALUES
    (?,?,?,?,?)
");
$insert -> bind_param (
    "isssi",
    $acId, $invoiceDate, $quantity, $amount, $currencyId
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
