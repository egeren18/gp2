<?php

session_start();

// module

$module = "tsac";
$moduleId = 113;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/tsac.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $tsac -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $tsac -> jList($moduleId);
                        $main -> jFooter();
                    break;
                    case 'tquest':
                        $tsac -> jTquest($moduleId);
                        $main -> jFooter();
                    break;
                    case 'create':
                        $tsac -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $tsac -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $tsac -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $tsac -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'createDb2':
                        $tsac -> jCreateDb2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'update':
                        $tsac -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $tsac -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $tsac -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $tsac -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $tsac -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $tsac -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'matrix':
                        $tsac -> jMatrix($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }