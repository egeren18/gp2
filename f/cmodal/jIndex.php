<?php

// module

$module = 'cmodal';

// connection

include '../connection.php';
include '../allow.php';

// select

$_cmodal = mysqli_query($master, "
    SELECT * FROM cmodal
    WHERE cmodalStatus = 1 AND
    moduleType < 3
    ORDER BY moduleId desc
");

$_cmodal2 = mysqli_query($master, "
    SELECT * FROM cmodal
    WHERE cmodalStatus = 1 AND
    moduleType > 2
    ORDER BY moduleId desc
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/cmodal/jIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/cmodal/jIndex.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/cmodal/jIndex.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/cmodal/jIndex.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/cmodal/jIndex.php';
        break;

    default:
        require_once '../v/cmodal/jIndex.php';
        break;
}
