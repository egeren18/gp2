<?php

session_start();

// module

$module = "user";
$moduleId = 7;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/user.php';

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
                if ($_SESSION["userAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$user -> jIndex()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jAccess == 1 ?
                    "{$user -> jIndex()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
            break;

            case 'external':
                if ($_SESSION["userAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$user -> jExternal()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jAccess == 1 ?
                    "{$user -> jExternal()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
            break;

            case 'read':
                if ($_SESSION["userAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$user -> jRead()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jRead == 1 ?
                    "{$user -> jRead()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
            break;

            case 'create':
                if ($_SESSION["userAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$user -> jCreate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jCreate == 1 ?
                    "{$user -> jCreate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
            break;

            case 'createDb':
                echo $view = $allow -> jCreate == 1 ?
                "{$user -> jCreateDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
            break;

            case 'createExternal':
                if ($_SESSION["userAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$user -> jCreateExternal()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jCreate == 1 && $_SESSION["userPrimary"] == 1 ?
                    "{$user -> jCreateExternal()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
            break;

            case 'createExternalDb':
                echo $view = $allow -> jCreate == 1 && $_SESSION["userPrimary"] == 1 ?
                "{$user -> jCreateExternalDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
            break;

            case 'update':
                if ($_SESSION["userAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$user -> jUpdate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jUpdate == 1 ?
                    "{$user -> jUpdate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'updateDb':
                echo $view = $allow -> jUpdate == 1 ?
                "{$user -> jUpdateDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'updateExternal':
                if ($_SESSION["userAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$user -> jUpdateExternal()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jUpdate == 1 && $_SESSION["userPrimary"] == 1 ?
                    "{$user -> jUpdateExternal()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'updateExternalDb':
                echo $view = $allow -> jUpdate == 1 && $_SESSION["userPrimary"] == 1 ?
                "{$user -> jUpdateExternalDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'delete':
                if ($_SESSION["userAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$user -> jDelete()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jDelete == 1 ?
                    "{$user -> jDelete()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'deleteDb':
                echo $view = $allow -> jDelete == 1 ?
                "{$user -> jDeleteDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'deleteExternal':
                if ($_SESSION["userAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$user -> jDeleteExternal()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jDelete == 1 && $_SESSION["userPrimary"] == 1 ?
                    "{$user -> jDeleteExternal()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'deleteExternalDb':
                echo $view = $allow -> jDelete == 1 && $_SESSION["userPrimary"] == 1 ?
                "{$user -> jDeleteExternalDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'profile':
                if ($_SESSION["userAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$user -> jProfile()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jUpdate == 1 ?
                    "{$user -> jProfile()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'profileDb':
                echo $view = $allow -> jUpdate == 1 ?
                "{$user -> jProfileDb()}" : "{$main -> jNotAllowed($module)}";
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
