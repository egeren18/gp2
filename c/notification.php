<?php

session_start();

// module

$module = "notification";

// connection

include '../connection.php';

// model

require_once '../m/main.php';
require_once '../m/notification.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

switch ($_SESSION["subscriberId"]) {
    
    case 1:

        switch ($mode) {

            case 'index':
                $notification -> jIndex();
                $main -> jFooter();
                break;

            case 'update':
                $notification -> jUpdate();
                $main -> jFooter();
                break;

            case 'updateDb':
                $notification -> jUpdateDb();
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
