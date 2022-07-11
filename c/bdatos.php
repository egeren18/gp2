<?php

session_start();

// module

$module = "bdatos";
$moduleId =127;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/bdatos.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $bdatos -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $bdatos -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $bdatos -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $bdatos -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $bdatos -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $bdatos -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $bdatos -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $bdatos -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $bdatos -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $bdatos -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $bdatos -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'read':
                        $bdatos -> jRead($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }