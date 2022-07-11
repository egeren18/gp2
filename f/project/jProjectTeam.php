<?php

// connection

include '../connection.php';
include '../connection2.php';

// var

$p = $_GET["p"];

//select

$_project = mysqli_query($connection, "SELECT * FROM project INNER JOIN ac ON project.acId = ac.acId INNER JOIN client ON project.clientId = ac.clientId WHERE project.projectId = '" . $p . "'");
$project = $_project -> fetch_object();

//select
$_pp = mysqli_query($connection, "SELECT * FROM project WHERE projectId = '" . $p . "'");
$pp = $_pp -> fetch_object();
$servicep = $pp -> serviceId;
$clientp = $pp -> clientId;

$_service = mysqli_query($master, "SELECT * FROM service WHERE serviceId = '" . $servicep . "'");
$service = $_service -> fetch_object();

$_client = mysqli_query($master, "SELECT * FROM client WHERE clientId = '" . $clientp . "'");
$client = $_client -> fetch_object();

// select

$_user = mysqli_query($master, "SELECT * FROM user WHERE subscriberId = '" . $_SESSION["subscriberId"] . "' AND userAdmin <> 3");

// select

$_designated = mysqli_query($master, "SELECT * FROM designatedgg WHERE designatedStatus = 1 AND route <> 1 ORDER BY designatedName");

// select

$_role = mysqli_query($master, "SELECT * FROM role WHERE roleStatus = 1");

// select

$_line = mysqli_query($master, "SELECT * FROM line WHERE lineStatus = 1");

// select

$_team = mysqli_query($connection, "SELECT * FROM projectteam WHERE projectId = '" . $p . "'");

// view

require_once '../v/project/jProjectTeam.php';
