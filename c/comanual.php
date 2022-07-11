<?php

session_start();

// module

$module = "comanual";
$moduleId = 122;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/comanual.php';

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
                        $comanual -> aIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $comanual -> aCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $comanual -> aUpdateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $comanual -> aDeleteDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    default:
                        $main -> jError();
                        $main -> jFooter();
                }