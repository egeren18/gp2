<?php

session_start();

// module

$module = "sp";
$moduleId = 87;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/sp.php';

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
                        $sp -> jIndex($moduleId);
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
                        $sp -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $sp -> jCreate($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $sp -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $sp -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $sp -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $sp -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $sp -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $sp -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $sp -> jDeleteDb($moduleId);
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
