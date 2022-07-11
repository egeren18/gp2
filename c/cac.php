<?php

session_start();

// module

$module = "cac";
$moduleId = 112;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/cac.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $cac -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $cac -> jList($moduleId);
                        $main -> jFooter();
                    break;
                    case 'cac':
                        $cac -> jCac($moduleId);
                        $main -> jFooter();
                    break;
                    case 'general':
                        $cac -> jGeneral($moduleId);
                        $main -> jFooter();
                    break;
                    case 'create':
                        $cac -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $cac -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $cac -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $cac -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $cac -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $cac -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $cac -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $cac -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $cac -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $cac -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }