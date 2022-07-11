<?php

// connect database
include '../connection.php';

// set variables
$rubroId = $_POST['rubroId'];
$puntosControlName = $_POST['puntosControlName'];
$puntosControlDescripcion = $_POST['puntosControlDescripcion'];
$puntosControlRecomendacion = $_POST['puntosControlRecomendacion'];
	// insert
	$insert = $connection -> prepare ("
	    INSERT INTO puntosControl
	    (puntosControlName, rubroId, puntosControlDescripcion, puntosControlRecomendacion )
	    VALUES
	    (?,?,?,?)
	");

	// configure parameters
	$insert -> bind_param (
	    "siss",
	    $puntosControlName, $rubroId, $puntosControlDescripcion, $puntosControlRecomendacion
	);

	// execute
	$insert -> execute();

	// id
	$insertId = $connection -> insert_id;

	// set variables
	$userId = $_SESSION["userId"];
	$module = 'puntosControl';
	$action = 'Insert';
	$itemId = $insertId;

	// insert
	$trace = $connection -> prepare ("
		INSERT INTO trace
		(userId, module, action, itemId)
		VALUES
		(?,?,?,?)
	");

	// configure pg_parameter_status()
	$trace -> bind_param (
		"issi",
		$userId, $module, $action, $itemId
	);

	// execute
	$trace -> execute();

	// view
	echo "
		<body>
			<script> window.location='../c/puntosControl.php?m=list&n=added'</script>
		</body>
	";
