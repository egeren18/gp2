<?php

// connect database
include '../connection.php';

// set id
$divisionId = $_GET["c"];

// set fields
$divisionName = $_POST["divisionName"];

// query
$division = mysqli_query(
    $connection,
    "SELECT * FROM division
    WHERE divisionName = '" . $divisionName . "'
    AND divisionStatus = 1
");

// select
$r_division = mysqli_fetch_array($division);

// database 
$divisionDb = trim($r_division["divisionName"]);

// compare
if (strcasecmp($divisionName, $divisionDb) !== 0) {

	// update
	$update = $connection -> prepare ("
	    UPDATE division
	    SET
		divisionName = ?
	    WHERE
	    divisionId = ?
	");

	// configure parameters
	$update -> bind_param (
	    "si",
		$divisionName, $divisionId
	);

	// execute
	$update -> execute();

	// set variables
	$userId = $_SESSION["userId"];
	$module = 'Division';
	$action = 'Update';
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
			<script> window.location='../c/division.php?m=list&n=updated'</script>
		</body>
	";
}
else {

	// view
	echo "
		<body>
			<script> window.location='../c/division.php?m=list&n=duplicated'</script>
		</body>
	";
}
