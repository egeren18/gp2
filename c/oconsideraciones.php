<?php

session_start();

// module

$module = "oconsideraciones";
$moduleId =146;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/oconsideraciones.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $oconsideraciones -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $oconsideraciones -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $oconsideraciones -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $oconsideraciones -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $oconsideraciones -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $oconsideraciones -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $oconsideraciones -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $oconsideraciones -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $oconsideraciones -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $oconsideraciones -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $oconsideraciones -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'read':
                        $oconsideraciones -> jRead($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }