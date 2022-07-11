<?php

// connect

include '../connection.php';
include '../connection2.php';

// var

$c = $_GET["c"];
// este codigo estoy seguro q lo puedo actualizsr cuando me entere de q coño es            
$_eje1 = mysqli_query($connection, "SELECT * FROM permiso WHERE userId = '" . $_SESSION["userId"] . "' AND  rubroId = 1 ");
$_eje2 = mysqli_query($connection, "SELECT * FROM permiso WHERE userId = '" . $_SESSION["userId"] . "' AND  rubroId = 2 ");
$_eje3 = mysqli_query($connection, "SELECT * FROM permiso WHERE userId = '" . $_SESSION["userId"] . "' AND  rubroId = 3 ");
$_eje4 = mysqli_query($connection, "SELECT * FROM permiso WHERE userId = '" . $_SESSION["userId"] . "' AND  rubroId = 4 ");
$_eje5 = mysqli_query($connection, "SELECT * FROM permiso WHERE userId = '" . $_SESSION["userId"] . "' AND  rubroId = 5 ");
$_eje6 = mysqli_query($connection, "SELECT * FROM permiso WHERE userId = '" . $_SESSION["userId"] . "' AND  rubroId = 6 ");
$_eje7 = mysqli_query($connection, "SELECT * FROM permiso WHERE userId = '" . $_SESSION["userId"] . "' AND  rubroId = 7 ");
$_eje8 = mysqli_query($connection, "SELECT * FROM permiso WHERE userId = '" . $_SESSION["userId"] . "' AND  rubroId = 8 ");
$_eje9 = mysqli_query($connection, "SELECT * FROM permiso WHERE userId = '" . $_SESSION["userId"] . "' AND  rubroId = 9 ");
$_eje10 = mysqli_query($connection, "SELECT * FROM permiso WHERE userId = '" . $_SESSION["userId"] . "' AND  rubroId = 10 ");
$_eje11 = mysqli_query($connection, "SELECT * FROM permiso WHERE userId = '" . $_SESSION["userId"] . "' AND  rubroId = 11 ");
$_eje12 = mysqli_query($connection, "SELECT * FROM permiso WHERE userId = '" . $_SESSION["userId"] . "' AND  rubroId = 12 ");
$_eje13 = mysqli_query($connection, "SELECT * FROM permiso WHERE userId = '" . $_SESSION["userId"] . "' AND  rubroId = 13 ");
$_eje14 = mysqli_query($connection, "SELECT * FROM permiso WHERE userId = '" . $_SESSION["userId"] . "' AND  rubroId = 14 ");
$_eje15 = mysqli_query($connection, "SELECT * FROM permiso WHERE userId = '" . $_SESSION["userId"] . "' AND  rubroId = 15 ");
// select
$_fdate = mysqli_query($master, "
    SELECT * FROM frecuencia
    WHERE projectId = '" . $c . "'
");

$fdate = $_fdate -> fetch_object();
// este codigo estoy seguro q lo puedo actualizsr cuando me entere de q coño es        
$dP1 = $fdate -> dateP1;
$dP2 = $fdate -> dateP2;
$dP3 = $fdate -> dateP3;
$dP4 = $fdate -> dateP4;
$dP5 = $fdate -> dateP5;
$dP6 = $fdate -> dateP6;

$dP7 = $fdate -> dateP7;
$dP8 = $fdate -> dateP8;
$dP9 = $fdate -> dateP9;
$dP10 = $fdate -> dateP10;
$dP11 = $fdate -> dateP11;
$dP12 = $fdate -> dateP12;




// select
$_f = mysqli_query($master, "
    SELECT * FROM frecuencia
    WHERE projectId = '" . $c . "'
");

$f = $_f -> fetch_object();
$fa = $f -> frecuencia;

// select
// conexiones a base de datos para sacar info q mostrare en la vista 

// conxeion q uno project con ac y cliente (agregar termoniso y condicines )
$_project = mysqli_query($connection, "SELECT * FROM project INNER JOIN ac ON project.acId = ac.acId INNER JOIN client ON ac.clientId = client.clientId WHERE project.projectId = '" . $c . "'");
$project = $_project -> fetch_object();

// select
// conexiones a base de datos para sacar info q mostrare en la vista 
$_leader = mysqli_query($connection, "SELECT * FROM projectteam WHERE projectId = '" . $project -> projectId . "' AND  designatedId = 7");

// select
// conexiones a base de datos para sacar info q mostrare en la vista 
$_consultant = mysqli_query($connection, "SELECT * FROM projectteam WHERE projectId = '" . $project -> projectId . "' AND  designatedId = 6");

// select
// conexiones a base de datos para sacar info q mostrare en la vista 
$riskPartner = mysqli_query($master, "SELECT * FROM user WHERE userStatus = 2");
$r_riskPartner = $riskPartner -> fetch_object();

// select
// conexiones a base de datos para sacar info q mostrare en la vista 
$_service = mysqli_query($master, "SELECT * FROM service WHERE serviceStatus = 1");
$service = $_service -> fetch_object();

// select

$_nature = mysqli_query($master, "SELECT * FROM service INNER JOIN nature ON service.natureId = nature.natureId WHERE service.serviceId = '" . $service -> serviceId . "'");
$nature = $_nature -> fetch_object();

// select
// esto es para sacar la info q mostrare en el grafico q es una ruedita 
$qtyIP = mysqli_query($connection, "SELECT COUNT(statusId) AS inProcess FROM projectexecutionanswer WHERE projectId = '" . $c . "' AND statusId = 1;");
$r_qtyIP = mysqli_fetch_array($qtyIP);
$qIP = $r_qtyIP["inProcess"];

// select

$qtyC = mysqli_query($connection, "SELECT COUNT(statusId) AS completed FROM projectexecutionanswer WHERE projectId = '" . $c . "' AND statusId = 2;");
$r_qtyC = mysqli_fetch_array($qtyC);
$qC = $r_qtyC["completed"];

// select

$qtyTC = mysqli_query($connection, "SELECT COUNT(statusId) AS toCorrect FROM projectexecutionanswer WHERE projectId = '" . $c . "' AND statusId = 3;");
$r_qtyTC = mysqli_fetch_array($qtyTC);
$qTC = $r_qtyTC["toCorrect"];

// select

$qtyR = mysqli_query($connection, "SELECT COUNT(statusId) AS reviewed FROM projectexecutionanswer WHERE projectId = '" . $c . "' AND statusId = 4;");
$r_qtyR = mysqli_fetch_array($qtyR);
$qR = $r_qtyR["reviewed"];

// select

$qtyF = mysqli_query($connection, "SELECT COUNT(statusId) AS finished FROM projectexecutionanswer WHERE projectId = '" . $c . "' AND statusId = 5;");
$r_qtyF = mysqli_fetch_array($qtyF);
$qF = $r_qtyF["finished"];

// select

$sql_qExecution = mysqli_query($master, "SELECT COUNT(*) total FROM qexecution WHERE itemStatus = 1");
$r_sql_qExecution = mysqli_fetch_array($sql_qExecution);
$qty = $r_sql_qExecution['total'];

// select
// esto no se q coño es 
$qExecution_1 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_2 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_3 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_4 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_5 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_6 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_7 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_8 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_9 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_10 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_11 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_12 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_13 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_14 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_15 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

// select

$qExecution_16 = mysqli_query($master, "SELECT * FROM qexecution WHERE itemStatus = 1");

require_once '../v/project/jExecution.php';
