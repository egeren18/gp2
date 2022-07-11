<?php

session_start();

// module

$module = "gedocumento";
$moduleId = 123;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/gedocumento.php';

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
                        $gedocumento -> aIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $gedocumento -> aCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $gedocumento -> aUpdateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $gedocumento -> aDeleteDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    default:
                        $main -> jError();
                        $main -> jFooter();
                }