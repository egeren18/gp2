<?php

// session start
@session_start();

// connect database
include '../connection.php';

// models
require_once '../m/main.php';
require_once '../m/prueba.php';

// header
$main -> jHeader();
$main -> jCheckSession();
$main -> jNavbar();
$main -> jTimer();

// mode
$mode = $_GET["m"];

switch ($mode) {

    // list
    case 'list':
        $prueba -> jList();
        $main -> jFooter();
        break;

    // add
    case 'add':
        $prueba -> jAdd();
        $main -> jFooter();
        break;
        // add
    case 'addRubro':
        $prueba -> jAddRubro();
        $main -> jFooter();
        break;
    case 'addsRubro':
        $prueba -> jAddsRubro();
        $main -> jFooter();
        break;    

    // add db
    case 'addDb':
        $prueba -> jAddDb();
        $main -> jFooter();
        break;

    // update
    case 'update':
        $prueba -> jUpdate();
        $main -> jFooter();
        break;

    // update db
    case 'updateDb':
        $prueba -> jUpdateDb();
        $main -> jFooter();
        break;

    // delete
    case 'delete':
        $prueba -> jDelete();
        $main -> jFooter();
        break;

    // delete db
    case 'deleteDb':
        $prueba -> jDeleteDb();
        $main -> jFooter();
        break;

    // error
    default:
        $main -> jError();
        $main -> jFooter();

}
