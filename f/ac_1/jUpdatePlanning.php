<?php

// connection

include '../connection.php';

// var

$acTeamId = $_GET["cod"];

// select

$planning = mysqli_query(
    $connection,
    "SELECT * FROM acteam
    WHERE acTeamId = '" . $acTeamId . "'
");

$r_planning = mysqli_fetch_array($planning);

$ujobId = $r_planning["jobId"];
$ulineId = $r_planning["lineId"];
$uhour = $r_planning["hour"];
$uamount = $r_planning["amount"];

// job

$job = mysqli_query(
    $connection,
    "SELECT * FROM job
    WHERE jobStatus = 1
");

// line

$line = mysqli_query(
    $connection,
    "SELECT * FROM line
    WHERE lineStatus = 1
");

// view

require_once '../v/ac/jUpdatePlanning.php';
