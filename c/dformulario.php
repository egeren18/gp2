<?php

session_start();

// module

$module = "dformulario";
$moduleId = 89;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/dformulario.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();
switch ($_SESSION["userTypeId"]) {
    
    case 2:

        switch ($_SESSION["userAdmin"]) {
        
            case 1:

                switch ($mode) {

                              case 'index':
                        $dformulario -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $dformulario -> jCreate($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $dformulario -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $dformulario -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $dformulario -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $dformulario -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $dformulario -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $dformulario -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $dformulario -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }
            break;

            case 2:

                switch ($mode) {

                    case 'index':
                        $dformulario -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $dformulario -> jCreate($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $dformulario -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $dformulario -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $dformulario -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $dformulario -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $dformulario -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $dformulario -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $dformulario -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }
            break;

            default:
                $main -> jError();
                $main -> jFooter();

        }
    break;

    default:
        $main -> jError();
        $main -> jFooter();

}
