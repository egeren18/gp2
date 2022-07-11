<?php

// connection

include '../connection.php';

// module

$module = 'stareas';
$id = '119';
// select
$_permiso = mysqli_query($master, "
    SELECT * FROM permiso
    WHERE userId = '" . $_SESSION["userId"] . "'
    AND moduleId = '" . $id . "'
");
$permiso = mysqli_fetch_array($_permiso);

// set fields
$d = $permiso["designatedId"];

// select

$_c = mysqli_query($master, "
    SELECT * FROM stareasm
    WHERE stareasId = '" . $_GET["id"] . "' AND
    stareasmId = '" . $_GET["sm"] . "'
");
$c = mysqli_fetch_array($_c);

// set fields
$tiempo = $c["testimado"];
$date = $c["date"];
$estado = $c["stareasStatus"];
$p = $c["ptareaId"];

$aid = $c["userId"];
$asunto = $c["stareasName"];
$stareasText = $c["stareasText"];
$stareasId = $c["stareasmId"];
$comentarios = $c["comentarios"];
$comentarios2 = $c["comentarios2"];
$treal = $c["treal"];
$departmentId = $c["departmentId"];
$st = $c["st"];
$important = $c["important"];
$si =  $c["stareasId"];
$exp =  $c["exp"];
// Prioridad tarea 
$_p = mysqli_query($master, "
    SELECT * FROM ptarea
    WHERE ptareaId = '" . $p . "'
");
$pt = mysqli_fetch_array($_p);
$ptareat = $pt["ptareaName"];

$_department = mysqli_query($master, "
    SELECT * FROM department
    WHERE departmentId = '" . $departmentId . "'
");
$pt = mysqli_fetch_array($_department);

$departmentName = $pt["departmentName"];

// set fields
$userId = $c["userId"];

$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userId = '" . $userId . "'
");
$user = mysqli_fetch_array($_user);

// set fields
$aName = $user["userName"];



// view


require_once '../v/stareas/jUpdate.php';
