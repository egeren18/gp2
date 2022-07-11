<?php

/* connection *****************************************************************/

include '../connection.php';

/* var ************************************************************************/

$acId = $_GET["c"];
$tracingPlanningId = $_GET["i"];

/* planning *******************************************************************/

$planning = mysqli_query(
    $connection,
    "SELECT * FROM tracingplanning
    WHERE tracingPlanningId = '" . $tracingPlanningId . "'
");

$r_planning = mysqli_fetch_array($planning);

$sjobId = $r_planning["jobId"];
$slineId = $r_planning["lineId"];
$hour = $r_planning["hour"];
$amount = $r_planning["amount"];

/* job ************************************************************************/

$job = mysqli_query(
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

/* view ***********************************************************************/

require_once '../v/tracing/jUpdatePlanning.php';
