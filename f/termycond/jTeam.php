<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables
 */

// recibo variables por URL
$clientId = $_GET["clientId"];
$serviceId = $_GET["serviceId"];
$termycondId = $_GET["cid"];



$n = $_GET["n"];

/*
 * Realiza una consulta a la base de datos.
 */


$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '". $serviceId ."'
");

//esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
$service = $_service -> fetch_object();

//esta variable me almtermycondena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$serviceName = $service -> serviceName ;

$_client = mysqli_query($master, "
    SELECT * FROM client
    WHERE clientId = '". $clientId ."'
");

//esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
$client = $_client -> fetch_object();

//esta variable me almtermycondena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$clientName = $client -> clientName ;

$_user = mysqli_query($master, "SELECT * FROM user WHERE subscriberId = '" . $_SESSION["subscriberId"] . "' AND userAdmin <> 3");
$_designated = mysqli_query($master, "SELECT * FROM designated WHERE designatedStatus = 1 ORDER BY designatedName");



$_ct = mysqli_query($connection, "
    SELECT * FROM tteam
    WHERE termycondId = '" . $termycondId . "' and tteamStatusId = 1
");


/*
 * Incluye y evalúa el archivo especificado.
 */

include '../plugins/toast/toast.php';

/*
 * Es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es extermycondtamente la expresión switch.
 */

switch ($n) {

    // Mensaje registrado
    
    case 'added': echo $added; require_once '../v/termycond/jTeam.php'; break;

    // Mensaje eliminado
    
    case 'deleted': echo $deleted; require_once '../v/termycond/jTeam.php'; break;
    
    // Mensaje eliminado
    case 'ee': echo $ee; require_once '../v/termycond/jTeam.php'; break;
    case 'no': echo $no; require_once '../v/termycond/jTeam.php'; break;

    default: require_once '../v/termycond/jTeam.php'; break;
    
}
