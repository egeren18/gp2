<?php

// connection

include '../connection.php';
include '../connection2.php';

// var

$uid = $_SESSION["userId"];

// select
/*
$l1 = mysqli_query(
    $connection, "
    SELECT * FROM user
    WHERE userId = '" . $uid . "'
");
$r_l1 = $l1 -> fetch_object();

$_SESSION["l1"] = $r_l1 -> userAdmin;

$l1 = $_SESSION["l1"];
$a = '../c/project.php?m=add';
$l = '../c/project.php?m=list';

// select

$project = mysqli_query(
    $connection,
    "SELECT * FROM project
    INNER JOIN client
    ON project.clientId = client.clientId
    LEFT JOIN service
    ON project.serviceId = service.serviceId
");

*/

// notify

include '../plugins/toast/toast.php';

$n = $_GET["n"] ?? '';

switch ($n) {

    case 'created':
        echo $created;
        require_once '../v/project/jIndex.php';
    break;

    case 'deniedProject':
        echo $deniedProject;
        require_once '../v/project/jIndex.php';
    break;

    case 'validProject':
        echo $validProyect;
        require_once '../v/project/jIndex.php';
    break;

    default:
        require_once '../v/project/jIndex.php';
        break;
}
