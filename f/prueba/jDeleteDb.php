<?php

// connect database
include '../connection.php';

// set id
$srubroId = $_GET["c"];
$srubroStatus = 0;

// update
$update = $connection -> prepare ("
    UPDATE srubro
    SET
	sRubroStatus = ?
    WHERE
    sRubroId = ?
");

// configure parameters
$update -> bind_param (
    "ii",
	$srubroStatus, $srubroId
);

// execute
$update -> execute();

// set variables
$userId = $_SESSION["userId"];
$module = 'srubro';
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
		<script> window.location='../c/srubro.php?m=list&n=deleted'</script>
	</body>
";
