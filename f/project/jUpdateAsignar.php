<?php

// connection

include '../connection.php';
include '../connection2.php';

// var

$p = $_GET["p"];
$u = $_GET["u"];
$c = $_GET["c"];

//sacar $V
$_cproject = mysqli_query($connection, "SELECT * FROM project WHERE projectId = '" . $p . "'");
$cproject = $_cproject -> fetch_object();
$a = $cproject -> serviceId;
$b = $cproject -> md;

$v =$a.'_'.$b;
$vv =$p.'_'.$a.'_'.$b;



//select

$_project = mysqli_query($connection, "SELECT * FROM project  WHERE projectId = '" . $p . "'");
$project = $_project -> fetch_object();

//select

$_client = mysqli_query($connection, "SELECT * FROM client WHERE clientId = '" . $project -> clientId . "'");
$client = $_client -> fetch_object();

//select

$_service = mysqli_query($master, "SELECT * FROM service WHERE serviceId = '" . $project -> serviceId . "'");
$service = $_service -> fetch_object();

// select

$_team = mysqli_query($connection, "SELECT * FROM projectteam WHERE projectTeamId = '" . $u . "'");
$team = $_team -> fetch_object();

//select

$_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $team -> userId . "'");
$user = $_user -> fetch_object();

// select

$_role = mysqli_query($master, "SELECT * FROM role WHERE roleId = '" . $team -> roleId . "'");
$role = $_role -> fetch_object();

$_line = mysqli_query($master, "SELECT * FROM line WHERE lineId = '" . $team -> lineId . "'");
$line = $_line -> fetch_object();

$_designated = mysqli_query($master, "SELECT * FROM designated WHERE designatedId = '" . $team -> designatedId . "'");
$designated = $_designated -> fetch_object();

// view





// para mostrar el area de planeacion de forma visual (codigo de gp/f/project/planning.php)


$_project = mysqli_query($connection, "SELECT * FROM project INNER JOIN ac ON project.acId = ac.acId INNER JOIN client ON ac.clientId = client.clientId WHERE project.projectId = '" . $c . "'");
$project = $_project -> fetch_object();

// select

$_leader = mysqli_query($connection, "SELECT * FROM projectteam WHERE projectId = '" . $project -> projectId . "' AND  designatedId = 7");

// select

$_consultant = mysqli_query($connection, "SELECT * FROM projectteam WHERE projectId = '" . $project -> projectId . "' AND  designatedId = 6");

// select

$riskPartner = mysqli_query($master, "SELECT * FROM user WHERE userStatus = 2");
$r_riskPartner = $riskPartner -> fetch_object();

// select

$_service = mysqli_query($master, "SELECT * FROM service WHERE serviceStatus = 1");
$service = $_service -> fetch_object();

// select

$_nature = mysqli_query($master, "SELECT * FROM service INNER JOIN nature ON service.natureId = nature.natureId WHERE service.serviceId = '" . $service -> serviceId . "'");
$nature = $_nature -> fetch_object();

// select

$qtyIP = mysqli_query($connection, "SELECT COUNT(statusId) AS inProcess FROM projectplanninganswer WHERE projectId = '" . $c . "' AND statusId = 1;");
$r_qtyIP = mysqli_fetch_array($qtyIP);
$qIP = $r_qtyIP["inProcess"];

// select

$qtyC = mysqli_query($connection, "SELECT COUNT(statusId) AS completed FROM projectplanninganswer WHERE projectId = '" . $c . "' AND statusId = 2;");
$r_qtyC = mysqli_fetch_array($qtyC);
$qC = $r_qtyC["completed"];

// select

$qtyTC = mysqli_query($connection, "SELECT COUNT(statusId) AS toCorrect FROM projectplanninganswer WHERE projectId = '" . $c . "' AND statusId = 3;");
$r_qtyTC = mysqli_fetch_array($qtyTC);
$qTC = $r_qtyTC["toCorrect"];

// select

$qtyR = mysqli_query($connection, "SELECT COUNT(statusId) AS reviewed FROM projectplanninganswer WHERE projectId = '" . $c . "' AND statusId = 4;");
$r_qtyR = mysqli_fetch_array($qtyR);
$qR = $r_qtyR["reviewed"];

// select

$qtyF = mysqli_query($connection, "SELECT COUNT(statusId) AS finished FROM projectplanninganswer WHERE projectId = '" . $c . "' AND statusId = 5;");
$r_qtyF = mysqli_fetch_array($qtyF);
$qF = $r_qtyF["finished"];

// select

$sql_qPlanning = mysqli_query($master, "SELECT COUNT(*) total FROM qplanning WHERE itemStatus = 1");
$r_sql_qPlanning = mysqli_fetch_array($sql_qPlanning);
$qty = $r_sql_qPlanning['total'];

// select

$qPlanning_1 = mysqli_query($master, "SELECT * FROM qplanning WHERE itemStatus = 1");

// select

$qPlanning_2 = mysqli_query($master, "SELECT * FROM qplanning WHERE itemStatus = 1");

// select

$qPlanning_3 = mysqli_query($master, "SELECT * FROM qplanning WHERE itemStatus = 1");

// select

$qPlanning_4 = mysqli_query($master, "SELECT * FROM qplanning WHERE itemStatus = 1");

// select

$qPlanning_5 = mysqli_query($master, "SELECT * FROM qplanning WHERE itemStatus = 1");

// select

$qPlanning_6 = mysqli_query($master, "SELECT * FROM qplanning WHERE itemStatus = 1");
require_once '../v/project/jUpdateAsignar.php';
