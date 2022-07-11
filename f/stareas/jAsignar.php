<?php

// connection

include '../connection.php';

// module

$module = 'stareas';
$id = '119';
$cid = $_GET['cid'];
// select
$_stareas = mysqli_query($master, "
    SELECT * FROM stareas
    WHERE stareasId = '" .  $cid . "'
");
//llave 
$stareas = $_stareas -> fetch_object();
$stareasId = $stareas -> stareasId;
$stareasName = $stareas -> stareasName;
$stareastext = $stareas -> stareasText;
$ptarea = $stareas -> ptareaId;
$testimado = $stareas -> testimado;
$date = $stareas -> date;
$userId = $stareas -> userId;
$departmentId = $stareas -> departmentId;

// select
$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userId = '" . $userId . "'
    
");
$user = $_user -> fetch_object();
$userName = $user -> userName;

$_user2 = mysqli_query($master, "
    SELECT * FROM user
    WHERE userStatus = 1 AND
    subscriberId = 1
");

$_department = mysqli_query($master, "
    SELECT * FROM department
    WHERE departmentId = '" . $departmentId .  "'
");
$department = $_department -> fetch_object();
$departmentName = $department -> departmentName;


$_ptarea = mysqli_query($master, "
    SELECT * FROM ptarea
    WHERE ptareaId = '" .  $ptarea . "'
");
$ptarea = $_ptarea -> fetch_object();
$ptareaName = $ptarea -> ptareaName;

$_tabla = mysqli_query($master, "
    SELECT * FROM stareasm
    WHERE stareasId = '" .  $cid . "'
");
$_tabla2 = mysqli_query($master, "
    SELECT * FROM stareasm
    WHERE stareasId = '" .  $cid . "'
");

$_pt = mysqli_query($master, "
    SELECT * FROM ptarea
    WHERE ptareaStatus = 1
");



// view

require_once '../v/stareas/jAsignar.php';