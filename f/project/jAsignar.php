<?php

// connection

include '../connection.php';
include '../connection2.php';

// var

$p = $_GET["p"];
$c = $_GET["c"];

//select
// esta conexion junta el proyecto con el ac y a su vez con el cliente. de esa forma con un id tengo la informacion completa desde el cliente hasta el proyecto
// agregar terminos y condiciones en esta logica y creo q debo hacerlo en varias conexiones 
$_project = mysqli_query($connection, "SELECT * FROM project INNER JOIN ac ON project.acId = ac.acId INNER JOIN client ON project.clientId = ac.clientId WHERE project.projectId = '" . $p . "'");
$project = $_project -> fetch_object();

// todas las conexiones siguientes son para obtener info relacionada 


//select
$_service = mysqli_query($master, "SELECT * FROM service WHERE serviceId = '" . $project -> serviceId . "'");
$service = $_service -> fetch_object();

// select

$_user = mysqli_query($master, "SELECT * FROM user WHERE subscriberId = '" . $_SESSION["subscriberId"] . "' AND userAdmin <> 3");

// select

$_designated = mysqli_query($master, "SELECT * FROM designated WHERE designatedStatus = 1 AND route <> 1 ORDER BY designatedName");

// select

$_role = mysqli_query($master, "SELECT * FROM role WHERE roleStatus = 1");

// select

$_line = mysqli_query($master, "SELECT * FROM line WHERE lineStatus = 1");

// select

$_team = mysqli_query($connection, "SELECT * FROM projectteam WHERE projectId = '" . $p . "'");

// view

require_once '../v/project/jAsignar.php';
