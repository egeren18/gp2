<?php

session_start();

// module

$module = "pac";
$moduleId = 113;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/pac.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $pac -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $pac -> jList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $pac -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $pac -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $pac -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $pac -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'createDb2':
                        $pac -> jCreateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $pac -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $pac -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $pac -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $pac -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $pac -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $pac -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }