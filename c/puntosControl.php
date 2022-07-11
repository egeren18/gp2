<?php

// session start
@session_start();

// connect database
include '../connection.php';

// models
require_once '../m/main.php';
require_once '../m/puntosControl.php';

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
        $puntosControl -> jList();
        $main -> jFooter();
        $main -> jDatatablesJs();
        break;

    // add
    case 'add':
        $puntosControl -> jAdd();
        $main -> jFooter();
        break;
        // add
    case 'addRubro':
        $puntosControl -> jAddRubro();
        $main -> jFooter();
        break;
    case 'addsRubro':
        $puntosControl -> jAddsRubro();
        $main -> jFooter();
        break;    

    // add db
    case 'addDb':
        $puntosControl -> jAddDb();
        $main -> jFooter();
        break;

    // update
    case 'update':
        $puntosControl -> jUpdate();
        $main -> jFooter();
        break;

    // update db
    case 'updateDb':
        $puntosControl -> jUpdateDb();
        $main -> jFooter();
        break;

    // delete
    case 'delete':
        $puntosControl -> jDelete();
        $main -> jFooter();
        break;

    // delete db
    case 'deleteDb':
        $puntosControl -> jDeleteDb();
        $main -> jFooter();
        break;
    // consulta
    case 'consulta':
        $puntosControl -> jConsulta();
        $main -> jFooter();
        break;
    // consulta Db
    case 'consultaDb':
        $puntosControl -> jConsultaDb();
        $main -> jFooter();
        break; 
        
    // vista
    case 'vista':
        $puntosControl -> jVista();
        $main -> jFooter();
        break;
        
    // vista Db
    case 'vistaDb':
        $puntosControl -> jVistaDb();
        $main -> jFooter();
        break;

    // error
    default:
        $main -> jError();
        $main -> jFooter();

}
