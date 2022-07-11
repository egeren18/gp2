<?php

// module

$module = 'civilStatus';

// connection

include '../connection.php';
include '../allow.php';

// select

$_civilStatus = mysqli_query($master, "
    SELECT * FROM civilstatus
    WHERE civilStatusStatus = 1
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/civilStatus/jIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/civilStatus/jIndex.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/civilStatus/jIndex.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/civilStatus/jIndex.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/civilStatus/jIndex.php';
        break;

    default:
        require_once '../v/civilStatus/jIndex.php';
        break;
}
