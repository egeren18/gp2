<?php

session_start();

// module

$module = "cmodal";
$moduleId = 110;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/cmodal.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

switch ($_SESSION["userTypeId"]) {
    
    case 1:
        
        switch ($_SESSION["userAdmin"]) {
        
            case 4:

                switch ($mode) {

                    case 'index':
                        $cmodal -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();

                }
                break;
            
            case 1:
            case 2:
            case 3:
            case 5:
        
                switch ($mode) {

                    case 'index':
                        echo $view = $allow -> jAccess == 1 ?
                        "{$cmodal -> jIndex($moduleId)}" : "{$main -> jNotAllowed("main")}";
                        $main -> jFooter();
                    break;
                    
                    case 'list':
                        echo $view = $allow -> jAccess == 1 ?
                        "{$cmodal -> jList($moduleId)}" : "{$main -> jNotAllowed("main")}";
                        $main -> jFooter();
                    break;

                    case 'create':
                        echo $view = $allow -> jCreate == 1 ?
                        "{$cmodal -> jCreate($moduleId)}" : "{$main -> jNotAllowed($module)}";
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        echo $view = $allow -> jCreate == 1 ?
                        "{$cmodal -> jCreateDb($moduleId)}" : "{$main -> jNotAllowed($module)}";
                        $main -> jFooter();
                    break;

                    case 'update':
                        echo $view = $allow -> jUpdate == 1 ?
                        "{$cmodal -> jUpdate($moduleId)}" : "{$main -> jNotAllowed($module)}";
                        $main -> jFooter();
                        break;

                    case 'updateDb':
                        echo $view = $allow -> jUpdate == 1 ?
                        "{$cmodal -> jUpdateDb($moduleId)}" : "{$main -> jNotAllowed($module)}";
                        $main -> jFooter();
                        break;

                    case 'delete':
                        echo $view = $allow -> jDelete == 1 ?
                        "{$cmodal -> jDelete($moduleId)}" : "{$main -> jNotAllowed($module)}";
                        $main -> jFooter();
                        break;

                    case 'deleteDb':
                        echo $view = $allow -> jDelete == 1 ?
                        "{$cmodal -> jDeleteDb($moduleId)}" : "{$main -> jNotAllowed($module)}";
                        $main -> jFooter();
                        break;

                    default:
                        $main -> jError();
                        $main -> jFooter();

                }
                break;
        }
        break;

    default:
        $main -> jError();
        $main -> jFooter();

}
