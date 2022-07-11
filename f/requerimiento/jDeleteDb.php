<?php

// connect database
include '../connection.php';

// set id
$requerimientoId = $_GET["c"];
$requerimientoStatus = 0;

// update
$update = $connection -> prepare ("
    UPDATE requerimiento
    SET
	requerimientoStatus = ?
    WHERE
    requerimientoId = ?
");

// configure parameters
$update -> bind_param (
    "ii",
	$requerimientoStatus, $requerimientoId
);

// execute
$update -> execute();

// set variables
$userId = $_SESSION["userId"];
$module = 'requerimiento';
$action = 'Delete';
$itemId = $requerimientoId;

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
		<script> window.location='../c/requerimiento.php?m=list&n=deleted'</script>
	</body>
";
