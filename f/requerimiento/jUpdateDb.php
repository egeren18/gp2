<?php

// connect database
include '../connection.php';

// set id
$requerimientoId = $_GET["c"];
$rubroId = $_POST["rubroId"];
$pruebaId = $_POST["srubroId"];

// set fields
$requerimientoName = $_POST["requerimientoName"];

	// update
	$update = $connection -> prepare ("
	    UPDATE requerimiento
	    SET
		requerimientoName = ?,
		rubroId = ?,
		sRubroId = ?
	    WHERE
	    requerimientoId = ?
	");

	// configure parameters
	$update -> bind_param (
	    "siii",
		$requerimientoName, $rubroId, $pruebaId, $requerimientoId
	);

	// execute
	$update -> execute();

	// set variables
	$userId = $_SESSION["userId"];
	$module = 'requerimiento';
	$action = 'Update';
	$itemId = $srubroId;

	// insert
	$trace = $connection -> prepare ("
		INSERT INTO trace
		(userId, module, action, itemId)
		VALUES
		(?,?,?,?)
	");

	// configure parameters
	$trace -> bind_param (
		"issi",
		$userId, $module, $action, $itemId
	);

	// execute
	$trace -> execute();

	// view
	echo "
		<body>
			<script> window.location='../c/requerimiento.php?m=list&n=updated'</script>
		</body>
	";
