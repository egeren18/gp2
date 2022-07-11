<?php

// connection

include '../connection.php';

// var

$p = $_GET["p"];
$u = $_GET["u"] ?? '';

//select

$_project = mysqli_query(
    $connection, "
    SELECT * FROM project
    INNER JOIN ac
    ON project.acId = ac.acId
    INNER JOIN client
    ON project.clientId = ac.clientId
    INNER JOIN service
    ON project.serviceId = service.serviceId
    WHERE project.projectId = '" . $p . "'
");

$project = $_project -> fetch_object();

// select

$_designated = mysqli_query(
    $connection, "
    SELECT * FROM designated
    WHERE designatedStatus = 1
");

// select

$_role = mysqli_query(
    $connection, "
    SELECT * FROM role
    WHERE roleStatus = 1
");

// select

$_line = mysqli_query(
    $connection, "
    SELECT * FROM line
    WHERE lineStatus = 1
");

// select

$_team = mysqli_query(
    $connection, "
    SELECT * FROM projectteam
    INNER JOIN user
    ON projectteam.userId = user.userId
    WHERE projectteam.projectTeamId = '" . $u . "'
");

$team = $_team -> fetch_object();

// view

require_once '../v/project/jUpdateProjectTeam.php';
