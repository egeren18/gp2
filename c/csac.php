<?php

session_start();

// module

$module = "csac";
$moduleId = 120;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/csac.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $csac -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $csac -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $csac -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $csac -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $csac -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'createDb2':
                        $csac -> jCreateDb2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'update':
                        $csac -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $csac -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $csac -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $csac -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $csac -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $csac -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'matrix':
                        $csac -> jMatrix($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }