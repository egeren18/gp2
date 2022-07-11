<?php

// connect database
include '../connection.php';

// set variables
$n = $_GET["n"] ?? '';

// query agregar el inner join 
$requerimiento = mysqli_query(
    $connection,
    "SELECT * FROM requerimiento
    INNER JOIN rubro
    ON requerimiento.rubroId = rubro.rubroId
    INNER JOIN srubro
    ON requerimiento.sRubroId = srubro.sRubroId
    WHERE requerimientoStatus = 1
    ORDER BY requerimientoId DESC
");

// notify
include '../plugins/toast/toast.php';

switch ($n) {

	case 'added':
		echo $added;
		require_once '../v/requerimiento/jList.php';
		break;
	
	case 'updated':
		echo $updated;
		require_once '../v/requerimiento/jList.php';
		break;

	case 'deleted':
		echo $deleted;
		require_once '../v/requerimiento/jList.php';
		break;

	case 'duplicated':
		echo $duplicated;
		require_once '../v/requerimiento/jList.php';
		break;

	default:
		require_once '../v/requerimiento/jList.php';
		break;

}
