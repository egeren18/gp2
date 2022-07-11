<?php

// connect database
include '../connection.php';

// set variables
$rubroId = $_GET["r"];
$pruebaId = $_GET["p"];
$requerimientoName = $_POST['requerimientoName'];
	// insert
	$insert = $connection -> prepare ("
	    INSERT INTO requerimiento
	    (rubroId, sRubroId, requerimientoName)
	    VALUES
	    (?,?,?)
	");

	// configure parameters
	$insert -> bind_param (
	    "iis",
	    $rubroId, $pruebaId, $requerimientoName
	);

	// execute
	$insert -> execute();

	// id
	$insertId = $connection -> insert_id;

	// set variables
	$userId = $_SESSION["userId"];
	$module = 'requerimiento';
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
			<script> window.location='../c/requerimiento.php?m=list&n=added'</script>
		</body>
	";
