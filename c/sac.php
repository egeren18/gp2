<?php

session_start();

// module

$module = "sac";
$moduleId = 111;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/sac.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $sac -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $sac -> jList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $sac -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $sac -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $sac -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $sac -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'createDb2':
                        $sac -> jCreateDb2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'update':
                        $sac -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $sac -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $sac -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $sac -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $sac -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $sac -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'matrix':
                        $sac -> jMatrix($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }