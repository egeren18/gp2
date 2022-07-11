<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables.
 */

$aid = $_GET["aid"];
$qid = $_GET["qid"];
$iid = $_GET["iid"];

$userId = $_SESSION["userId"];

/*
 * Realiza una consulta a la base de datos.
 */

$_ac = mysqli_query($connection, "SELECT * FROM ac WHERE acId = '" . $aid . "'");
$ac = $_ac -> fetch_object();

/*
 * Realiza una consulta a la base de datos.
 */

$_client = mysqli_query($connection, "SELECT * FROM client WHERE clientId = '" . $ac -> clientId . "'");
$client = $_client -> fetch_object();

/*
 * Realiza una consulta a la base de datos.
 */

$_leader = mysqli_query($connection, "SELECT * FROM acteam WHERE acId = '" . $ac -> acId . "' AND  designatedId = 4");

/*
 * Realiza una consulta a la base de datos.
 */

$_consultant = mysqli_query($connection, "SELECT * FROM acteam WHERE acId = '" . $ac -> acId . "' AND  designatedId = 1");

/*
 * Realiza una consulta a la base de datos.
 */

$_service = mysqli_query($master, " SELECT * FROM service INNER JOIN nature ON service.natureId = nature.natureId WHERE serviceId = '" . $ac -> serviceId . "'");
$service = $_service -> fetch_object();

/*
 * Realiza una consulta a la base de datos.
 */

$_question = mysqli_query($acq, "SELECT * FROM acq$aid WHERE mId = '" . $iid . "'");
$question = $_question -> fetch_object();

/*
 * Realiza una consulta a la base de datos.
 */

$_group = mysqli_query($master, "SELECT * FROM interestgroup WHERE groupStatus = 1");

/*
 * Realiza una consulta a la base de datos.
 */

$_role = mysqli_query($connection, "SELECT * FROM acteam WHERE acId = '" . $ac -> acId . "' AND  userId = '" . $_SESSION["userId"] . "'");
$role = $_role -> fetch_object();

/*
 * Realiza una consulta a la base de datos.
 */

$_answer = mysqli_query($acq, "SELECT * FROM acr$aid WHERE acId = '" . $aid . "' AND acQId = '" . $qid . "' AND acIId = '" . $iid . "'");
$answer = $_answer -> fetch_object();

            




$query = "SELECT COUNT(r) AS q FROM priskr$aid WHERE acId = '" . $_GET["aid"] . "' AND r > 0";
  $_qty = mysqli_query($acq, $query);
  $qty = $_qty -> fetch_object();

// ahora ya tengo cantidad de respuestas que vamos a promediar, y hago la sumatoria
//almacenando dicho valor en la variable $sum. luego el promedio es almacenado en
//la variable @$average

  $query = "SELECT SUM(r) AS s FROM priskr$aid WHERE acId = '" . $_GET["aid"] . "' AND r > 0";
  $_sum = mysqli_query($acq, $query);
  $sum = $_sum -> fetch_object();

@$average = $sum -> s / $qty -> q;

// ese resultado se ubicara ahora en alguno de los siguientes rangos y mostrara
//en pantalla el equivalente al rango en el que cayo.

switch ($average) {

    case $average < 1.5 : $average = 'Bajo';
        break;
    case $average >= 1.5 && $average < 2.5 : $average = 'Bajo - Moderado';
        break;
    case $average >= 2.5 && $average < 3.5 : $average = 'Moderado';
        break;
    case $average >= 3.5 && $average < 4.5 : $average = 'Moderado - Alto';
        break;
    case $average >= 4.5 && $average <= 5 : $average = 'Alto';
        break;
    default : $average = 'No Aplica';
        break;
}


$_role = mysqli_query($connection, "SELECT * FROM acteam WHERE acId = '" . $aid . "' AND userId = '" . $_SESSION["userId"] . "'");
                                        $role = $_role -> fetch_object();              
                                   
                                        if ($role -> designatedId && $_SESSION["userAdmin"] != 3) {
                                            
                                            /*
                                             * Variables.
                                             */
                                            
                                            $r = $role -> designatedId;
                                            
                                        }
                                        else {
                                            
                                            /*
                                             * Variables.
                                             */
                                            
                                            $r = '';
                                            
                                            /*
                                             * Mensaje.
                                             */
                                            
                                            if ($_SESSION["userAdmin"] != 3) {
                                                
                                                echo "<i class='material-icons red-text left m-r-10'>warning</i>Usted no pertenece a &eacute;ste Equipo de Trabajo, por favor comun&iacute;quese con el Administrador!";
                                                
                                            }
                                            
                                        }

require_once '../v/ac/jRead.php';