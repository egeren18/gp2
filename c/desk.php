<?php

session_start();

// module

$module = "desk";
$moduleId = 114;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/desk.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $desk -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $desk -> jList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $desk -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $desk -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $desk -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $desk -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $desk -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $desk -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $desk -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $desk -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $desk -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $desk -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }