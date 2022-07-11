<?php

// module

$module = 'user';
$moduleId = 7;

// connection

include '../connection.php';
include '../allow.php';

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userTypeId = 1
    AND userAdmin = 4
    AND userStatus = 1
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':

        echo $added;
    	require_once '../v/user/jExternal.php';
    	break;
	
    case 'updated':

        echo $updated;
    	require_once '../v/user/jExternal.php';
    	break;

    case 'deleted':

        echo $deleted;
    	require_once '../v/user/jExternal.php';
    	break;
    
    case 'duplicated':

        echo $duplicated;
    	require_once '../v/user/jExternal.php';
    	break;

    case 'notAllowed':

        echo $notAllowed;
    	require_once '../v/user/jExternal.php';
    	break;

    default:

    	require_once '../v/user/jExternal.php';
    	break;

}
