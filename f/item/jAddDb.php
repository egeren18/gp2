<?php

// connect database
include '../connection.php';

// set variables
$divisionName = $_POST['divisionName'];

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

	// insert
	$insert = $connection -> prepare ("
	    INSERT INTO division
	    (divisionName)
	    VALUES
	    (?)
	");

	// configure parameters
	$insert -> bind_param (
	    "s",
	    $divisionName
	);

	// execute
	$insert -> execute();

	// id
	$insertId = $connection -> insert_id;

	// set variables
	$userId = $_SESSION["userId"];
	$module = 'Division';
	$action = 'Insert';
	$itemId = $insertId;

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
			<script> window.location='../c/division.php?m=list&n=added'</script>
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
