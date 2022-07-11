<?php

@session_start();

if (!isset($_SESSION["userSessionId"])) {

    header("Location: ../index.php");
    
}

// connect database
include '../connection.php';

// models
require_once '../m/main.php';
require_once '../m/item.php';

// header

$main -> jTimer();
$main -> jHeader();
$main -> jCheckSession();
$main -> jNavbar();

// mode
$mode = $_GET["m"];

switch ($mode) {

    // menu
    case 'menu':
        $item -> jMenu();
        $main -> jFooter();
        break;

    // list
    case 'list':
        $item -> jList();
        $main -> jFooter();
        break;

    // add
    case 'add':
        $item -> jAdd();
        $main -> jFooter();
        break;

    // add db
    case 'createDb':
        $item -> jcreateDb();
        $main -> jFooter();
        break;

    // update
    case 'update':
        $item -> jUpdate();
        $main -> jFooter();
        break;

    // update db
    case 'updateDb':
        $item -> jUpdateDb();
        $main -> jFooter();
        break;

    // delete
    case 'delete':
        $item -> jDelete();
        $main -> jFooter();
        break;

    // delete db
    case 'deleteDb':
        $item -> jDeleteDb();
        $main -> jFooter();
        break;

    // error
    default:
        $main -> jError();
        $main -> jFooter();

}
