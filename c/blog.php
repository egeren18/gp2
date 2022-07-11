<?php

session_start();

// module

$module = "Blog";
$moduleId = 73;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/blog.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();



        switch ($mode) {

            case 'index':
                $blog -> jIndex($moduleId);
                $main -> jFooter();
            break;

            case 'create':
                $blog -> jCreate($moduleId);
                $main -> jFooter();
            break;

            case 'createDb':
                $blog -> jCreateDb($moduleId);
                $main -> jFooter();
            break;
            case 'createDbR':
                $blog -> jCreateDbR($moduleId);
                $main -> jFooter();
            break;
            case 'read':
                $blog -> jRead($moduleId);
                $main -> jFooter();
                break;
                
            case 'update':
                $blog -> jUpdate($moduleId);
                $main -> jFooter();
                break;

            case 'updateDb':
                $blog -> jUpdateDb($moduleId);
                $main -> jFooter();
                break;
                
                case 'updateDbR':
                $blog -> jUpdateDbR($moduleId);
                $main -> jFooter();
                break;

            case 'delete':
                $blog -> jDelete($moduleId);
                $main -> jFooter();
                break;

            case 'deleteDb':
                $blog -> jDeleteDb($moduleId);
                $main -> jFooter();
                break;

            default:
                $main -> jError();
                $main -> jFooter();

        }
   

     


