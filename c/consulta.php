<?php

session_start();

// module

$module = "Consulta";
$moduleId = 75;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/consulta.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();



        switch ($mode) {

            case 'index':
                $consulta -> jIndex($moduleId);
                $main -> jFooter();
            break;

            case 'create':
                $consulta -> jCreate($moduleId);
                $main -> jFooter();
            break;

            case 'createDb':
                $consulta -> jCreateDb($moduleId);
                $main -> jFooter();
            break;
            case 'createDbR':
                $consulta -> jCreateDbR($moduleId);
                $main -> jFooter();
            break;
            case 'read':
                $consulta -> jRead($moduleId);
                $main -> jFooter();
                break;
                
            case 'update':
                $consulta -> jUpdate($moduleId);
                $main -> jFooter();
                break;

            case 'updateDb':
                $consulta -> jUpdateDb($moduleId);
                $main -> jFooter();
                break;
                
                case 'updateDbR':
                $consulta -> jUpdateDbR($moduleId);
                $main -> jFooter();
                break;

            case 'delete':
                $consulta -> jDelete($moduleId);
                $main -> jFooter();
                break;

            case 'deleteDb':
                $consulta -> jDeleteDb($moduleId);
                $main -> jFooter();
                break;

            default:
                $main -> jError();
                $main -> jFooter();

        }
   

     


