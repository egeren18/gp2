<?php

session_start();

// module

$module = "clientPrev";
$moduleId = 87;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/clientPrev.php';

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
                        $clientPrev -> jIndex($moduleId);
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
                        $clientPrev -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $clientPrev -> jCreate($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $clientPrev -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $clientPrev -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $clientPrev -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $clientPrev -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $clientPrev -> jDeleteDb($moduleId);
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
