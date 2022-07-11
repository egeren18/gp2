<?php

session_start();

// module

$module = 'subscriber';
$moduleId = 4;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/subscriber.php';

// mode

$mode = $_GET["m"];

// header

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

switch ($_SESSION["userTypeId"]) {
    
    case 1:

        switch ($mode) {

            case 'index':
                if ($_SESSION["userAdmin"] == 4) {
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$subscriber -> jIndex()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jAccess == 1 ?
                    "{$subscriber -> jIndex()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
                break;

            case 'read':
                if ($_SESSION["userAdmin"] == 4) {
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$subscriber -> jRead()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jRead == 1 ?
                    "{$subscriber -> jRead()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'create':
                if ($_SESSION["userAdmin"] == 4) {
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$subscriber -> jCreate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jCreate == 1 ?
                    "{$subscriber -> jCreate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'createDb':
                echo $view = $allow -> jCreate == 1 ?
                "{$subscriber -> jCreateDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'update':
                if ($_SESSION["userAdmin"] == 4) {
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$subscriber -> jUpdate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jUpdate == 1 ?
                    "{$subscriber -> jUpdate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'updateDb':
                echo $view = $allow -> jUpdate == 1 ?
                "{$subscriber -> jUpdateDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'delete':
                if ($_SESSION["userAdmin"] == 4) {
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$subscriber -> jDelete()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jDelete == 1 ?
                    "{$subscriber -> jDelete()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'deleteDb':
                echo $view = $allow -> jDelete == 1 ?
                "{$subscriber -> jDeleteDb()}" : "{$main -> jNotAllowed($module)}";
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
