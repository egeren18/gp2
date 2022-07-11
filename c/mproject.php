<?php

session_start();

// module

$module = "mproject";
$moduleId =128;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/mproject.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $mproject -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'index2':
                        $mproject -> jIndex2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'index3':
                        $mproject -> jIndex3($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'index4':
                        $mproject -> jIndex4($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'index5':
                        $mproject -> jIndex5($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'index6':
                        $mproject -> jIndex6($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $mproject -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $mproject -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $mproject -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create4':
                        $mproject -> jCreate4($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create5':
                        $mproject -> jCreate5($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create6':
                        $mproject -> jCreate6($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $mproject -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'createDb2':
                        $mproject -> jCreateDb2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'createDb3':
                        $mproject -> jCreateDb3($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'createDb4':
                        $mproject -> jCreateDb4($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'createDb5':
                        $mproject -> jCreateDb5($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'createDb6':
                        $mproject -> jCreateDb6($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $mproject -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $mproject -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'update3':
                        $mproject -> jUpdate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $mproject -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'updateDb2':
                        $mproject -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'updateDb3':
                        $mproject -> jUpdateDb3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $mproject -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $mproject -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'read':
                        $mproject -> jRead($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }