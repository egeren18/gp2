<?php

/* connection *****************************************************************/

include '../connection.php';

/* var ************************************************************************/

$acId = $_GET["c"];

/* data ***********************************************************************/

$data = mysqli_query(
    $connection,
    "SELECT * FROM tracing
    WHERE acId = '" . $acId . "'
");

$r_data = mysqli_fetch_array($data);
$proposal = $r_data["proposal"];
$budget = $r_data["budget"];
$term = $r_data["term"];
$decision = $r_data["decision"];
$amount = $r_data["amount"];
$dcurrencyId = $r_data["currencyId"];
        
/* select *********************************************************************/

$matrixQty = mysqli_query(
    $connection,
    "SELECT COUNT(r) AS q
    FROM acmatrix
    WHERE acId = '" . $acId . "'
    AND r > 0
");

$r_matrixQty = mysqli_fetch_array($matrixQty);

$matrixQty = $r_matrixQty['q'];

$sum = mysqli_query(
    $connection,
    "SELECT SUM(r) AS s
    FROM acmatrix
    WHERE acId = '" . $acId . "'
    AND r > 0
");

$r_sum = mysqli_fetch_array($sum);

$sum = $r_sum['s'];

@$average1 = $sum / $matrixQty;

switch ($average1) {
    case $average1 < 1.5 : $average1 = 'Bajo';
        break;
    case $average1 >= 1.5 && $average1 < 2.5 : $average1 = 'Bajo - Moderado';
        break;
    case $average1 >= 2.5 && $average1 < 3.5 : $average1 = 'Moderado';
        break;
    case $average1 >= 3.5 && $average1 < 4.5 : $average1 = 'Moderado - Alto';
        break;
    case $average1 >= 4.5 && $average1 <= 5 : $average1 = 'Alto';
        break;
    default : $average1 = 'No Aplica';
        break;
}

/* select *********************************************************************/

$job = mysqli_query(
    $connection,
    "SELECT * FROM job
    WHERE jobStatus = 1
");

/* select *********************************************************************/

$sjob = mysqli_query(
    $connection,
    "SELECT * FROM job
    WHERE jobStatus = 1
");

/* select *********************************************************************/

$line = mysqli_query(
    $connection,
    "SELECT * FROM line
    WHERE lineStatus = 1
");

/* select *********************************************************************/

$sline = mysqli_query(
    $connection,
    "SELECT * FROM line
    WHERE lineStatus = 1
");

/* select *********************************************************************/

$currency = mysqli_query(
    $connection,
    "SELECT * FROM currency
");

/* scurrency ******************************************************************/

$scurrency = mysqli_query(
    $connection,
    "SELECT * FROM currency
");

/* select *********************************************************************/

$planning = mysqli_query(
    $connection, "
    SELECT * FROM tracingplanning
    INNER JOIN job
    ON tracingplanning.jobId = job.jobId
    INNER JOIN line
    ON tracingplanning.lineId = line.lineId
    WHERE acId = '" . $acId . "'
");

/* select *********************************************************************/

$scheme = mysqli_query(
    $connection, "
    SELECT * FROM tracingscheme
    INNER JOIN currency
    ON tracingscheme.currencyId = currency.currencyId
    WHERE acId = '" . $acId . "'
    ORDER BY quantity
");

/* notify *********************************************************************/

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/tracing/jDetail.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/tracing/jDetail.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/tracing/jDetail.php';
        break;

    case 'sizeError':
        echo $sizeError;
        require_once '../v/tracing/jDetail.php';
        break;

    default:
        require_once '../v/tracing/jDetail.php';
        break;
}
