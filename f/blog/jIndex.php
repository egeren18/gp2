<?php

// module

$module = 'blog';
$id = '73';
// connection

include '../connection.php';
include '../allow.php';

// select
$_permiso = mysqli_query($master, "
    SELECT * FROM permiso
    WHERE userId = '" . $_SESSION["userId"] . "'
    AND moduleId = '" . $id . "'
");
$permiso = mysqli_fetch_array($_permiso);

// set fields
$d = $permiso["designatedId"];

// select

$_blog = mysqli_query($master, "
    SELECT * FROM blog
    WHERE blogStatus != 0
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/blog/jIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/blog/jIndex.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/blog/jIndex.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/blog/jIndex.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/blog/jIndex.php';
        break;

    default:
        require_once '../v/blog/jIndex.php';
        break;
}
