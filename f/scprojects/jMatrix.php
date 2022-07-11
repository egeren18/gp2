<?php

// connection

include '../connection.php';
include '../allow.php';

//get
$cid = $_GET["cid"];
$projectId = $_GET["projectId"];
$v =$cid.'_'.$projectId;

// select


$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $cid . "'
");

$service = $_service -> fetch_object();
$serviceName = $service -> serviceName;

$_project = mysqli_query($app, "
    SELECT * FROM project
    WHERE projectId = '" . $projectId . "'
");

$project = $_project -> fetch_object();
$projectName = $project -> projectName;
$date = $project -> date;
$date2 = $project -> date2;
$version = $project -> version;








$_tabla = mysqli_query($appf, "
    SELECT * FROM mod$v WHERE etapaId = 1
");

$_tabla2 = mysqli_query($appf, "
    SELECT * FROM mod$v WHERE etapaId = 2
");

$_tabla3 = mysqli_query($appf, "
    SELECT * FROM mod$v WHERE etapaId = 3
");

$_tabla4 = mysqli_query($appf, "
    SELECT * FROM mod$v WHERE etapaId = 4
");



// view

require_once '../v/scproject/jMatrix.php';