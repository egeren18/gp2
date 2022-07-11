<?php

/* connection *****************************************************************/

include '../connection.php';

/* data ***********************************************************************/

$data = mysqli_query(
    $connection,
    "SELECT * FROM acteam
");

$r_data = mysqli_fetch_array($data);

/* job ************************************************************************/

$job = mysqli_query(
    $connection,
    "SELECT * FROM job
    WHERE jobStatus = 1
");

/* sjob ***********************************************************************/

$sjob = mysqli_query(
    $connection,
    "SELECT * FROM job
    WHERE jobStatus = 1
");

/* line ***********************************************************************/

$line = mysqli_query(
    $connection,
    "SELECT * FROM line
    WHERE lineStatus = 1
");

/* sline **********************************************************************/

$sline = mysqli_query(
    $connection,
    "SELECT * FROM line
    WHERE lineStatus = 1
");

/* planning *******************************************************************/

$planning = mysqli_query(
    $connection,
    "SELECT * FROM acteam
    INNER JOIN job
    ON acteam.jobId = job.jobId
    INNER JOIN line
    ON acteam.lineId = line.lineId
");

/* notify *********************************************************************/

include '../plugins/toast/toast.php';

$n = $_GET["n"] ?? '';

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/ac/jRiskPartner.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/ac/jRiskPartner.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/ac/jRiskPartner.php';
        break;

    default:
        require_once '../v/ac/jRiskPartner.php';
        break;

}
