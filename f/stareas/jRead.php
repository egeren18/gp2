<?php

// connection

include '../connection.php';

// module

$module = 'stareas';

// select

$stareas = mysqli_query($master, "
    SELECT * FROM stareasm
    WHERE stareasId = '" . $_GET["id"] . "' AND
    stareasmId = '" . $_GET["sm"] . "' 
");

$r_stareas = mysqli_fetch_array($stareas);

// set fields
$stareasId = $r_stareas["stareasmId"];
$titulo = $r_stareas["stareasName"];
$stareasText = $r_stareas["stareasText"];
$stareasText2 = $r_stareas["stareasTextA"];
$cat = $r_stareas["departmentId"];
$s = $r_stareas["stareasStatus"];
$date = $r_stareas["date"];
$n = $r_stareas["userId"];
$comentarios = $r_stareas["comentarios"];
$r = $r_stareas["rName"];
$treal = $r_stareas["treal"];
$tiempo = $r_stareas["testimado"];
$departmentId = $r_stareas["departmentId"];
$st = $r_stareas["st"];
$si =  $r_stareas["stareasId"];
// view



$dp = mysqli_query($master, "
    SELECT * FROM department
    WHERE departmentId = '" . $departmentId . "'
");

$r_dp = mysqli_fetch_array($dp);

// set fields
$dpN = $r_dp["departmentName"];

$user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userId = '" . $n . "'
");

$r_user = mysqli_fetch_array($user);

// set fields
$aname = $r_user["userName"]; 
$bname = $r_user["userSurname"]; 

$sname =  $aname . " " . $bname;

require_once '../v/stareas/jRead.php';
