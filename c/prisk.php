<?php

session_start();

// module

$module = "prisk";
$moduleId =126;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/prisk.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $prisk -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $prisk -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $prisk -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $prisk -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $prisk -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $prisk -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $prisk -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $prisk -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $prisk -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $prisk -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $prisk -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'read':
                        $prisk -> jRead($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }