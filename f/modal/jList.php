<?php

// module

$module = 'modal';
$moduleId = 85;
// connection

include '../connection.php';
include '../allow.php';

// select

$_modal = mysqli_query($master, "
    SELECT * FROM modal2
    WHERE modalStatus = 1
    ORDER BY  modalId DESC
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/modal/jList.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/modal/jList.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/modal/jList.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/modal/jList.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/modal/jList.php';
        break;

    default:
        require_once '../v/modal/jList.php';
        break;
}