<?php

// module

$module = 'myUser';

// connection

include '../connection.php';
include '../allow.php';

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userStatus = 1
    AND subscriberId = '" . $_SESSION["subscriberId"] . "'
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'updated':
        echo $updated;
        require_once '../v/myUser/jIndex.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/myUser/jIndex.php';
        break;

    default:
        require_once '../v/myUser/jIndex.php';
        break;
}
