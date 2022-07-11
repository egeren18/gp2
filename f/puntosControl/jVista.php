<?php

// connect database
include '../connection.php';

// set id
$puntosId = $_GET["c"];
// set fields
$rubroId = $_POST["rubroId"];
$puntosN = $_POST["puntosControlName"];
$puntosD = $_POST["puntosControlDescripcion"];
$puntosR = $_POST["puntosControlRecomendacion"];
// query
$puntosControl = mysqli_query(
    $connection,
    "SELECT * FROM puntoscontrol
    WHERE puntosControlId = '" . $puntosId . "'
    AND puntosControlStatus = 1
");
// select
$r_prueba = mysqli_fetch_array($puntosControl);
	// update
	$update = $connection -> prepare ("
	    UPDATE puntoscontrol
	    SET
	    rubroId = ?,
		puntosControlName = ?,
		puntosControlDescripcion = ?,
		puntosControlRecomendacion = ?
	    WHERE
	    puntosControlId = ?
	");

	// configure parameters
	$update -> bind_param (
	    "isssi",
		$rubroId, $puntosN, $puntosD, $puntosR, $puntosId
	);

	// execute
	$update -> execute();

	// set variables
	$userId = $_SESSION["userId"];
	$module = 'srubro';
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
			<script> window.location='../c/puntosControl.php?m=list&n=updated'</script>
		</body>
	";

