<?php

// connection

include '../connection.php';

// var

$p = $_GET["p"];

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

$_user = mysqli_query(
    $connection, "
    SELECT * FROM user
    WHERE userId NOT IN (
        SELECT userId
        FROM projectteam
    )
    AND userAdmin = 1
    AND userStatus = 1
");

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
    INNER JOIN designated
    ON projectteam.designatedId = designated.designatedId
    INNER JOIN role
    ON projectteam.roleId = role.roleId
    INNER JOIN line
    ON projectteam.lineId = line.lineId
    WHERE projectteam.projectId = '" . $p . "'
");

// view

require_once '../v/project/jProjectTeam.php';
