<?php

session_start();

// module

$module = "mvisual";
$moduleId = 124;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/mvisual.php';

// mode

if ($_GET["m"] != null){

$mode = $_GET["m"];   

}else{
$mode = 1;    
}


// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {

                    case 'index':
                        $mvisual -> aIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'index2':
                        $mvisual -> aIndex2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $mvisual -> aCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb2':
                        $mvisual -> aCreateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $mvisual -> aUpdateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb2':
                        $mvisual -> aUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $mvisual -> aDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb2':
                        $mvisual -> aDeleteDb2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    default:
                        $main -> jError();
                        $main -> jFooter();
                }