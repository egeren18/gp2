<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables
 */

$acId = $_GET["aid"];
$n = $_GET["n"];

/*
 * Realiza una consulta a la base de datos.
 */

$_ac = mysqli_query($connection, "SELECT * FROM ac INNER JOIN client ON ac.clientId = client.clientId WHERE ac.acId = '" . $acId . "'");
$ac = $_ac -> fetch_object();

/*
 * Realiza una consulta a la base de datos.
 */

$_service = mysqli_query($master, "SELECT * FROM service WHERE serviceId = '" . $ac -> serviceId . "'");
$service = $_service -> fetch_object();

/*
 * Realiza una consulta a la base de datos.
 */

$_user = mysqli_query($master, "SELECT * FROM user WHERE subscriberId = '" . $_SESSION["subscriberId"] . "' AND userAdmin <> 3");

/*
 * Realiza una consulta a la base de datos.
 */

$_designated = mysqli_query($master, "SELECT * FROM designated WHERE designatedStatus = 1 ORDER BY designatedName");

/*
 * Realiza una consulta a la base de datos.
 */

$_team = mysqli_query($connection, "SELECT * FROM acteam WHERE acId = '" . $acId . "'");

/*
 * Realiza una consulta a la base de datos.
 */

$_access = mysqli_query($connection, "SELECT * FROM acteam WHERE acId = '" . $_GET["aid"] . "' AND userId = '" . $_SESSION["userId"] . "' AND designatedId = 4");
$access = $_access -> fetch_object();

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../plugins/toast/toast.php';

/*
 * Es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.
 */

switch ($n) {

    // Mensaje registrado
    
    case 'added': echo $added; require_once '../v/ac/jTeam.php'; break;

    // Mensaje eliminado
    
    case 'deleted': echo $deleted; require_once '../v/ac/jTeam.php'; break;
    
    // Mensaje eliminado
    case 'ee': echo $ee; require_once '../v/ac/jTeam.php'; break;
    case 'no': echo $no; require_once '../v/ac/jTeam.php'; break;

    default: require_once '../v/ac/jTeam.php'; break;
    
}
