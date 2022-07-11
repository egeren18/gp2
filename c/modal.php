<?php

session_start();

// module

$module = 'modal';
$moduleId = 85;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/modal.php';

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
                    "{$modal -> jIndex()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jAccess == 1 ?
                    "{$modal -> jIndex()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
                break;
                case 'list':
                if ($_SESSION["userAdmin"] == 4) {
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$modal -> jList()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jAccess == 1 ?
                    "{$modal -> jList()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
                break;

            case 'read':
                if ($_SESSION["userAdmin"] == 4) {
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$modal -> jRead()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jRead == 1 ?
                    "{$modal -> jRead()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'create':
                if ($_SESSION["userAdmin"] == 4) {
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$modal -> jCreate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jCreate == 1 ?
                    "{$modal -> jCreate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'createDb':
                echo $view = $allow -> jCreate == 1 ?
                "{$modal -> jCreateDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'update':
                if ($_SESSION["userAdmin"] == 4) {
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$modal -> jUpdate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jUpdate == 1 ?
                    "{$modal -> jUpdate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'updateDb':
                echo $view = $allow -> jUpdate == 1 ?
                "{$modal -> jUpdateDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'delete':
                if ($_SESSION["userAdmin"] == 4) {
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$modal -> jDelete()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jDelete == 1 ?
                    "{$modal -> jDelete()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'deleteDb':
                echo $view = $allow -> jDelete == 1 ?
                "{$modal -> jDeleteDb()}" : "{$main -> jNotAllowed($module)}";
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
