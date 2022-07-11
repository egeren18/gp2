<?php

session_start();

// module

$module = "myUser";
$moduleId = 24;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/myUser.php';

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
                        $myUser -> jIndex($moduleId);
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
                        $myUser -> jIndex($moduleId);
                        $main -> jFooter();
                        break;

                    case 'update':
                        $myUser -> jUpdate($moduleId);
                        $main -> jFooter();
                        break;

                    case 'updateDb':
                        $myUser -> jUpdateDb($moduleId);
                        $main -> jFooter();
                        break;
                    
                    default:
                        $main -> jError();
                        $main -> jFooter();
                }
                
            break;

            case 4:
               
                switch ($mode) {

                    case 'index':
                        $myUser -> jIndex($moduleId);
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
