<?php

// module

$module = 'cmodal';

// connection

include '../connection.php';
include '../allow.php';

// select

$_cmodal = mysqli_query($master, "
    SELECT * FROM cmodal
    WHERE moduleId = '" . $_GET['id'] .  "'
");
$cmodal = $_cmodal -> fetch_object();
$name = $cmodal -> moduleName;
$mid = $cmodal -> moduleId;
$t = $cmodal -> cmodalType;

$_cmodal2 = mysqli_query($master, "
    SELECT * FROM cmodal
    WHERE cmodalStatus = 1 AND
    moduleType > 2
    ORDER BY moduleId desc
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];



if ($_GET['id'] == 27){
    
$_acmodal = mysqli_query($master, "
    SELECT * FROM acmodal
    ORDER BY acmodalId desc
");

     switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/cmodal/jListac.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/cmodal/jListac.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/cmodal/jListac.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/cmodal/jListac.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/cmodal/jListac.php';
        break;

    default:
        require_once '../v/cmodal/jListac.php';
        break;
}
    
}else {
switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/cmodal/jList.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/cmodal/jList.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/cmodal/jList.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/cmodal/jList.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/cmodal/jList.php';
        break;

    default:
        require_once '../v/cmodal/jList.php';
        break;
}
}