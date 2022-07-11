<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables
 */

$n = $_GET["n"];

/*
 * Realiza una consulta a la base de datos.
 */

$_client = mysqli_query($connection, "SELECT * FROM client WHERE clientStatus = 1");

/*
 * Realiza una consulta a la base de datos.
 */

$_service = mysqli_query($master, "SELECT * FROM service WHERE serviceStatus = 1");

/*
 * Realiza una consulta a la base de datos.
 */

$_leader = mysqli_query($master, "SELECT * FROM user WHERE subscriberId = '" . $_SESSION["subscriberId"] . "' AND userAdmin < 3 AND userStatus = 1");
/*
 * Realiza una consulta a la base de datos.
 */

$_gerente = mysqli_query($master, "SELECT * FROM user WHERE subscriberId = '" . $_SESSION["subscriberId"] . "' AND userAdmin < 3 AND userStatus = 1");

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../plugins/toast/toast.php';

/*
 * Es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.
 */

switch ($n) {

    // Mensaje cambio de estatus

    case 'changeStatus': echo $changeStatus; require_once '../v/ac/jAdd.php'; break;

    // Mensaje ya hay una AC valida

    case 'validAc': echo $validAc; require_once '../v/ac/jAdd.php'; break;

  // Mensaje ya hay una AC valida

    case 'validUser': echo $validUser; require_once '../v/ac/jAdd.php'; break;

    default: require_once '../v/ac/jAdd.php'; break;

}
