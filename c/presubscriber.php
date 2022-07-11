<?php

session_start();

// module

$module = 'presubscriber';
$moduleId = 82;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/presubscriber.php';

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
                    "{$presubscriber -> jIndex()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jAccess == 1 ?
                    "{$presubscriber -> jIndex()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
                break;

            case 'read':
                if ($_SESSION["userAdmin"] == 4) {
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$presubscriber -> jRead()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jRead == 1 ?
                    "{$presubscriber -> jRead()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'create':
                if ($_SESSION["userAdmin"] == 4) {
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$presubscriber -> jCreate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jCreate == 1 ?
                    "{$presubscriber -> jCreate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'createDb':
                echo $view = $allow -> jCreate == 1 ?
                "{$presubscriber -> jCreateDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'update':
                if ($_SESSION["userAdmin"] == 4) {
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$presubscriber -> jUpdate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jUpdate == 1 ?
                    "{$presubscriber -> jUpdate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'updateDb':
                echo $view = $allow -> jUpdate == 1 ?
                "{$presubscriber -> jUpdateDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'delete':
                if ($_SESSION["userAdmin"] == 4) {
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$presubscriber -> jDelete()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jDelete == 1 ?
                    "{$presubscriber -> jDelete()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'deleteDb':
                echo $view = $allow -> jDelete == 1 ?
                "{$presubscriber -> jDeleteDb()}" : "{$main -> jNotAllowed($module)}";
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
