<?php

// connect database
include '../connection.php';

// set id
$puntosId = $_GET["c"];
$puntosStatus = 0;

// update
$update = $connection -> prepare ("
    UPDATE puntoscontrol
    SET
	puntosControlStatus = ?
    WHERE
    puntosControlId = ?
");

// configure parameters
$update -> bind_param (
    "ii",
	$puntosStatus, $puntosId
);

// execute
$update -> execute();

// set variables
$userId = $_SESSION["userId"];
$module = 'puntos';
$action = 'Delete';
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
		<script> window.location='../c/puntosControl.php?m=list&n=deleted'</script>
	</body>
";
