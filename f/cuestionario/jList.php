<?php

// module

$module = 'cuestionario';
$moduleId = 86;
// connection

include '../connection.php';
include '../allow.php';

// select
$id = $_GET["id"];

if($id == 1) {
    
   $_cuestionario = mysqli_query($master, "
    SELECT * FROM qm1
    WHERE itemStatus = 1
");
 
    
}
if($id == 2) {
    
   $_cuestionario = mysqli_query($master, "
    SELECT * FROM qm2
    WHERE itemStatus = 1
");
 
    
}
if($id == 3) {
    
   $_cuestionario = mysqli_query($master, "
    SELECT * FROM qm3
    WHERE itemStatus = 1
");
 
    
}
if($id == 4) {
    
   $_cuestionario = mysqli_query($master, "
    SELECT * FROM qm4
    WHERE itemStatus = 1
");
 
    
}


// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/cuestionario/jList.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/cuestionario/jList.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/cuestionario/jList.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/cuestionario/jList.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/cuestionario/jList.php';
        break;

    default:
        require_once '../v/cuestionario/jList.php';
        break;
}
