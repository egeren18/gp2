<?php

session_start();

// module

$module = "access";
$moduleId = 26;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/myAccess.php';

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
                        $myAccess -> jIndex();
                        $main -> jFooter();
                    break;
                
                }
                
            break;

            case 2:

                switch ($mode) {

                    case 'index':
                        echo $view = $allowS -> jAccess == 1 ?
                        "{$myAccess -> jIndex()}" : "{$main -> jNotAllowed("main")}";
                        $main -> jFooter();
                    break;
                }
                
            break;

            case 3:

                switch ($mode) {

                    case 'index':
                        echo $view = $allowS -> jAccess == 1 ?
                        "{$myAccess -> jIndex()}" : "{$main -> jNotAllowed("main")}";
                        $main -> jFooter();
                    break;
                }
                
            break;

            case 4:

                switch ($mode) {

                    case 'index':
                        echo $view = $allowS -> jAccess == 1 ?
                        "{$myAccess -> jIndex()}" : "{$main -> jNotAllowed("main")}";
                        $main -> jFooter();
                    break;
                }
                
            break;
        
        }
        
    break;

    default:
        $main -> jError();
        $main -> jFooter();

}

/*
            case 'add':
                echo $view = $allow -> jAdd == 1 ?
                "{$accessGP -> jAdd()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'createDb':
                echo $view = $allow -> jAdd == 1 ?
                "{$accessGP -> jcreateDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'update':
                echo $view = $allow -> jUpdate == 1 ?
                "{$accessGP -> jUpdate()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'updateDb':
                echo $view = $allow -> jUpdate == 1 ?
                "{$accessGP -> jUpdateDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            default:
                $main -> jError();
                $main -> jFooter();
*/
