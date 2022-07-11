<?php

session_start();

// module

$module = "accessSubscriber";
$moduleId = 8;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/accessSubscriber.php';

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
                echo $view = $allow -> jAccess == 1 ?
                "{$accessSubscriber -> jIndex()}" : "{$main -> jNotAllowed("main")}";
                $main -> jFooter();
                break;

            case 'user':
                echo $view = $allow -> jAccess == 1 ?
                "{$accessSubscriber -> jUser()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'create':
                echo $view = $allow -> jCreate == 1 ?
                "{$accessSubscriber -> jCreate()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'createDb':
                echo $view = $allow -> jCreate == 1 ?
                "{$accessSubscriber -> jCreateDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'update':
                echo $view = $allow -> jUpdate == 1 ?
                "{$accessSubscriber -> jUpdate()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'updateDb':
                echo $view = $allow -> jUpdate == 1 ?
                "{$accessSubscriber -> jUpdateDb()}" : "{$main -> jNotAllowed($module)}";
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
