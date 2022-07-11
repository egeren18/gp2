<?php

session_start();

// module

$module = "preguntaD";
$moduleId = 80;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/preguntaD.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $preguntaD -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $preguntaD -> jList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $preguntaD -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $preguntaD -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $preguntaD -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $preguntaD -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $preguntaD -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $preguntaD -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $preguntaD -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $preguntaD -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $preguntaD -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $preguntaD -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }