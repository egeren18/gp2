<?php
// conectar
include '../connection.php';
$module = 'stareas';
$id = '115';
// connection


// select

// view
$_stareas = mysqli_query($master, "
    SELECT * FROM stareas
    WHERE stareasStatus != 0  

");

$_stareas2 = mysqli_query($master, "
    SELECT * FROM stareas
    WHERE stareasStatus != 0 

");

$_g = mysqli_query($master, "
    SELECT * FROM ptarea
    WHERE ptareaStatus = 1
    
");

$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE subscriberId = 1
    
");


// view
require_once '../v/stareas/jCreate.php';
