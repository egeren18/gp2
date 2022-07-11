<?php

@session_start();

if (!isset($_SESSION["userSessionId"])) {

    header("Location: ../index.php");
    
}

/* connection *****************************************************************/

include '../connection.php';

/* model **********************************************************************/

require_once '../m/main.php';
require_once '../m/tracing.php';

/* header *********************************************************************/

$main -> jTimer();
$main -> jHeader();
$main -> jCheckSession();
$main -> jNavbar();

/* mode ***********************************************************************/

$mode = $_GET["m"];

switch ($mode) {

    case 'list':
        $tracing -> jList();
        $main -> jFooter();
        break;

    case 'detail':
        $tracing -> jDetail();
        $main -> jFooter();
        break;

    case 'updateTracingDb':
        $tracing -> jUpdateTracingDb();
        $main -> jFooter();
        break;

    case 'addPlanningDb':
        $tracing -> jAddPlanningDb();
        $main -> jFooter();
        break;

    case 'updatePlanning':
        $tracing -> jUpdatePlanning();
        $main -> jFooter();
        break;

    case 'updatePlanningDb':
        $tracing -> jUpdatePlanningDb();
        $main -> jFooter();
        break;

    case 'deletePlanningDb':
        $tracing -> jDeletePlanningDb();
        $main -> jFooter();
        break;

    case 'addSchemeDb':
        $tracing -> jAddSchemeDb();
        $main -> jFooter();
        break;

    case 'updateScheme':
        $tracing -> jUpdateScheme();
        $main -> jFooter();
        break;

    case 'updateSchemeDb':
        $tracing -> jUpdateSchemeDb();
        $main -> jFooter();
        break;

    case 'deleteSchemeDb':
        $tracing -> jDeleteSchemeDb();
        $main -> jFooter();
        break;

    default:
        $main -> jError();
        $main -> jFooter();

}
