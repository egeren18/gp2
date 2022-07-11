<?php

// connect database
include '../connection.php';

// set id
$pruebaId = $_GET["c"];

// set fields
$pruebaName = $_POST["pruebaName"];

// query
$prueba = mysqli_query(
    $connection,
    "SELECT * FROM prueba
    WHERE pruebaName = '" . $pruebaName . "'
    AND pruebaStatus = 1
");

// select
$r_prueba = mysqli_fetch_array($prueba);

// database 
$pruebaDb = trim($r_prueba["prueba"]);

// compare
if (strcasecmp($pruebaName, $pruebaDb) !== 0) {

	// update
	$update = $connection -> prepare ("
	    UPDATE prueba
	    SET
		pruebaName = ?
	    WHERE
	    pruebaId = ?
	");

	// configure parameters
	$update -> bind_param (
	    "si",
		$pruebaName, $pruebaId
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
			<script> window.location='../c/prueba.php?m=list&n=updated'</script>
		</body>
	";
}
else {

	// view
	echo "
		<body>
			<script> window.location='../c/prueba.php?m=list&n=duplicated'</script>
		</body>
	";
}
