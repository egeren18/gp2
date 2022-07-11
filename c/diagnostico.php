<?php

session_start();

// module

$module = "diagnostico";
$moduleId = 78;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/diagnostico.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $diagnostico -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $diagnostico -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $diagnostico -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $diagnostico -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $diagnostico -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $diagnostico -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $diagnostico -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $diagnostico -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $diagnostico -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $diagnostico -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $diagnostico -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }