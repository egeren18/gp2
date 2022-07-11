<?php

// connect database
include '../connection.php';

// set variables
$n = $_GET["n"];

// query agregar el inner join 
$prueba = mysqli_query(
    $master,
    "SELECT * FROM prueba
	INNER JOIN rubro
    ON prueba.rubroId = rubro.rubroId
    INNER JOIN srubro
    ON prueba.sRubroId = srubro.sRubroId
    WHERE pruebaStatus = 1
    ORDER BY pruebaId DESC
");

// notify
include '../plugins/toast/toast.php';

switch ($n) {

	case 'added':
		echo $added;
		require_once '../v/prueba/jList.php';
		break;
	
	case 'updated':
		echo $updated;
		require_once '../v/prueba/jList.php';
		break;

	case 'deleted':
		echo $deleted;
		require_once '../v/prueba/jList.php';
		break;

	case 'duplicated':
		echo $duplicated;
		require_once '../v/prueba/jList.php';
		break;

	default:
		require_once '../v/prueba/jList.php';
		break;

}
