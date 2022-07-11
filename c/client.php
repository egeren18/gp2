<?php

session_start();

// module

$module = "client";
$moduleId = 25;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/client.php';

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
                        $client -> jIndex($moduleId);
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
                        $client -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $client -> jCreate($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $client -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $client -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $client -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $client -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $client -> jDeleteDb($moduleId);
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
