<?php

// connect database
include '../connection.php';

// set variables
$n = $_GET["n"] ?? '';

// query agregar el inner join 
$puntosControl = mysqli_query(
    $connection,
    "SELECT * FROM puntoscontrol
    INNER JOIN rubro
    ON puntoscontrol.rubroId = rubro.rubroId
    WHERE puntosControlStatus = 1
    ORDER BY puntosControlId DESC
");

// notify
include '../plugins/toast/toast.php';

switch ($n) {

	case 'added':
		echo $added;
		require_once '../v/puntosControl/jList.php';
		break;
	
	case 'updated':
		echo $updated;
		require_once '../v/puntosControl/jList.php';
		break;

	case 'deleted':
		echo $deleted;
		require_once '../v/puntosControl/jList.php';
		break;

	case 'duplicated':
		echo $duplicated;
		require_once '../v/puntosControl/jList.php';
		break;

	default:
		require_once '../v/puntosControl/jList.php';
		break;

}
