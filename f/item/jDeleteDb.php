<?php

// connect database
include '../connection.php';

// set id
$divisionId = $_GET["c"];
$divisionStatus = 0;

// update
$update = $connection -> prepare ("
    UPDATE division
    SET
	divisionStatus = ?
    WHERE
    divisionId = ?
");

// configure parameters
$update -> bind_param (
    "ii",
	$divisionStatus, $divisionId
);

// execute
$update -> execute();

// set variables
$userId = $_SESSION["userId"];
$module = 'Division';
$action = 'Delete';
$itemId = $divisionId;

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
		<script> window.location='../c/division.php?m=list&n=deleted'</script>
	</body>
";
