<?php

// connection

include '../connection.php';

// module

$module = 'stareas';
$id = '119';
$cid = $_GET['cid'];
// select
$_stareas = mysqli_query($master, "
    SELECT * FROM stareasm
    WHERE stareasId = '" .  $cid . "'
");
//llave 
$stareas = $_stareas -> fetch_object();
$stareasId = $stareas -> stareasId;
$stareasName = $stareas -> stareasName;
$stareasText = $stareas -> stareasText;
$ptareaId = $stareas -> ptareaId;
$testimado = $stareas -> testimado;
$date = $stareas -> date;
$userId = $stareas -> userId;
$departmentId = $stareas -> departmentId;

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
// select
$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userId = '" . $userId . "'
    
");
$user = $_user -> fetch_object();
$userName = $user -> userName;


$_grafico = mysqli_query($master, "
    SELECT * FROM stareasm
    WHERE stareasId = '" . $_GET['cid'] . "'
    ");
$contador1 = 0;
$contador2 = 0;
$contador3 = 0;
$contador4 = 0;

while($grafico = $_grafico -> fetch_object()){
    if($grafico -> stareasStatus == 1){$contador1++;}
    if($grafico -> stareasStatus == 2){$contador2++;}
    if($grafico -> stareasStatus == 3){$contador3++;}
    if($grafico -> stareasStatus == 4){$contador4++;}
}
$_botones = mysqli_query($master, "
    SELECT * FROM stareasm
    WHERE stareasId = '" . $_GET['cid'] . "'
    ");

// Categoria 1
$_pac1 = mysqli_query($master, "
    SELECT * FROM stareasm
    WHERE stareasId = '" . $_GET['cid'] . "'
    ");

// Categoria 1
$_fin = mysqli_query($master, "
    SELECT * FROM stareas
    WHERE stareasId = '" . $_GET['cid'] . "'
    ");
$fin = $_fin -> fetch_object();
$ssid = $fin -> stareasStatus;
$_stareas2 = mysqli_query($master, "
    SELECT * FROM stareasm
    WHERE stareasId = '" .  $cid . "'
");

 $_sm = mysqli_query($master, "
                                                SELECT * FROM stareasm
                                                WHERE stareasId = '". $cid . "'
                                                
                                            ");
                                            $contador = 0;
                                            $acumulador = 0;
                                            while($sm = $_sm -> fetch_object()){
                                                $contador++;
                                                $acumulador = $acumulador + $sm -> testimado;
                                            }
// view

require_once '../v/stareas/jMatriz.php';