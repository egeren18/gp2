<?php

session_start();

// module

$module = "qitem";
$moduleId = 92;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/qitem.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $qitem -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $qitem -> jList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $qitem -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $qitem -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $qitem -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $qitem -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $qitem -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $qitem -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $qitem -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $qitem -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $qitem -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $qitem -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }