<?php

session_start();

// module

$module = "scproject";
$moduleId = 129;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/scproject.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $scproject -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $scproject -> jList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $scproject -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $scproject -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $scproject -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $scproject -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'createDb2':
                        $scproject -> jCreateDb2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'update':
                        $scproject -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $scproject -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $scproject -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $scproject -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $scproject -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $scproject -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'matrix':
                        $scproject -> jMatrix($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }