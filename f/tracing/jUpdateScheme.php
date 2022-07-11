<?php

/* connection *****************************************************************/

include '../connection.php';

/* var ************************************************************************/

$acId = $_GET["c"];
$tracingSchemeId = $_GET["i"];

/* scheme *********************************************************************/

$scheme = mysqli_query(
    $connection,
    "SELECT * FROM tracingscheme
    WHERE tracingSchemeId = '" . $tracingSchemeId . "'
");

$r_scheme = mysqli_fetch_array($scheme);

$scurrencyId = $r_scheme["currencyId"];
$invoiceDate = $r_scheme["invoiceDate"];
$quantity = $r_scheme["quantity"];
$amount = $r_scheme["amount"];

/* currency *******************************************************************/

$currency = mysqli_query(
    $connection,
    "SELECT * FROM currency
    WHERE currencyStatus = 1
");

/* view ***********************************************************************/

require_once '../v/tracing/jUpdateScheme.php';
