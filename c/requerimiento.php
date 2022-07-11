<?php

// session start
@session_start();

// connect database
include '../connection.php';

// models
require_once '../m/main.php';
require_once '../m/requerimiento.php';

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
        $requerimiento -> jList();
        $main -> jFooter();
        $main -> jDatatablesJs();
        break;

    // add
    case 'add':
        $requerimiento -> jAdd();
        $main -> jFooter();
        break;
        // add
    case 'addRubro':
        $requerimiento -> jAddRubro();
        $main -> jFooter();
        break;
    case 'addsRubro':
        $requerimiento -> jAddsRubro();
        $main -> jFooter();
        break;    

    // add db
    case 'addDb':
        $requerimiento -> jAddDb();
        $main -> jFooter();
        break;

    // update
    case 'update':
        $requerimiento -> jUpdate();
        $main -> jFooter();
        break;

    // update db
    case 'updateDb':
        $requerimiento -> jUpdateDb();
        $main -> jFooter();
        break;

    // delete
    case 'delete':
        $requerimiento -> jDelete();
        $main -> jFooter();
        break;

    // delete db
    case 'deleteDb':
        $requerimiento -> jDeleteDb();
        $main -> jFooter();
        break;

    // error
    default:
        $main -> jError();
        $main -> jFooter();

}
