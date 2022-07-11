<?php

session_start();

// module

$module = "sacs";
$moduleId = 111;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/sacs.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $sacs -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $sacs -> jList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $sacs -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $sacs -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $sacs -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $sacs -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'createDb2':
                        $sacs -> jCreateDb2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'update':
                        $sacs -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $sacs -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $sacs -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $sacs -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $sacs -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $sacs -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'matrix':
                        $sacs -> jMatrix($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }