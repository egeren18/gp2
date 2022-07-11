<?php

@session_start();

if (!isset($_SESSION["userSessionId"])) {

    header("Location: ../index.php");
    
}

// connect database
include '../connection.php';

// models
require_once '../m/main.php';
require_once '../m/support.php';

// header

$main -> jTimer();
$main -> jHeader();
$main -> jCheckSession();
$main -> jNavbar();

// mode
$mode = $_GET["m"];

switch ($mode) {

    // list
    case 'list':
        $support -> jList();
        $main -> jFooter();
        break;

    // add
    case 'add':
        $support -> jAdd();
        $main -> jFooter();
        break;

    // add db
    case 'createDb':
        $support -> jcreateDb();
        $main -> jFooter();
        break;

    // update
    case 'update':
        $support -> jUpdate();
        $main -> jFooter();
        break;

    // update db
    case 'updateDb':
        $support -> jUpdateDb();
        $main -> jFooter();
        break;

    // delete
    case 'delete':
        $support -> jDelete();
        $main -> jFooter();
        break;

    // delete db
    case 'deleteDb':
        $support -> jDeleteDb();
        $main -> jFooter();
        break;

    // error
    default:
        $main -> jError();
        $main -> jFooter();

}
