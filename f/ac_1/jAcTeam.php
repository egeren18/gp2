<?php

// connection

include '../connection.php';

// var

$a = $_GET["a"] ?? '';
$q = $_GET["q"] ?? '';
$n = $_GET["n"] ?? '';

// select

$_ac = mysqli_query(
    $connection, "
    SELECT * FROM ac
    INNER JOIN client
    ON ac.clientId = client.clientId
    INNER JOIN service
    ON ac.serviceId = service.serviceId
    WHERE ac.acId = '" . $a . "'
");

$ac = $_ac -> fetch_object();

// select

$_user = mysqli_query(
    $connection, "
    SELECT * FROM user
    WHERE userId NOT IN (
        SELECT userId
        FROM acteam
    )
    AND userAdmin = 1
    AND userStatus = 1
");

// select

$_designated = mysqli_query(
    $connection, "
    SELECT * FROM designated
    WHERE designatedId NOT IN (
        SELECT designatedId
        FROM acteam
    )
    AND designatedId = 1
    AND designatedStatus = 1
    
");

// select

$_team = mysqli_query(
    $connection, "
    SELECT * FROM acteam
    INNER JOIN user
    ON acteam.userId = user.userId
    INNER JOIN designated
    ON acteam.designatedId = designated.designatedId
    WHERE acteam.acId = '" . $a . "'
");

// view

include '../plugins/toast/toast.php';

switch ($n) {

    case 'added':
        echo $added;
    	require_once '../v/ac/jAcTeam.php';
    	break;

    case 'deleted':
        echo $deleted;
    	require_once '../v/ac/jAcTeam.php';
    	break;

    default:
        require_once '../v/ac/jAcTeam.php';
    	break;
    
}
