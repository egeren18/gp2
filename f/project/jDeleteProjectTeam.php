<?php

// connection

include '../connection.php';
include '../connection2.php';

// var

$p = $_GET["p"];
$u = $_GET["u"];

//select
// puras conexiones para mostrar la visual 

// en esta conexion se debe agregar terminos y condiciones 
$_project = mysqli_query($connection, "SELECT * FROM project INNER JOIN ac ON project.acId = ac.acId WHERE project.projectId = '" . $p . "'");
$project = $_project -> fetch_object();

//select
$_pp = mysqli_query($connection, "SELECT * FROM project WHERE projectId = '" . $p . "'");
$pp = $_pp -> fetch_object();
$servicep = $pp -> serviceId;
$clientp = $pp -> clientId;

$_client = mysqli_query($connection, "SELECT * FROM client WHERE clientId = '" . $clientp . "'");
$client = $_client -> fetch_object();

//select

$_service = mysqli_query($master, "SELECT * FROM service WHERE serviceId = '" . $servicep . "'");
$service = $_service -> fetch_object();

// select

$_designated = mysqli_query($master, "SELECT * FROM designated WHERE designatedStatus = 1");

// select

$_role = mysqli_query($master, "SELECT * FROM role WHERE roleStatus = 1");

// select

$_line = mysqli_query($master, "SELECT * FROM line WHERE lineStatus = 1");

// select

$_team = mysqli_query($connection, "SELECT * FROM projectteam WHERE projectTeamId = '" . $u . "'");
$team = $_team -> fetch_object();

//select

$_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $team -> userId . "'");
$user = $_user -> fetch_object();

// view

require_once '../v/project/jDeleteProjectTeam.php';
