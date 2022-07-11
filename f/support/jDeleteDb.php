<?php

// connect database
include '../connection.php';

// set id
$clientId = $_GET["c"];
$clientStatus = 0;

// update
$update = $connection -> prepare ("
    UPDATE client
    SET
	clientStatus = ?
    WHERE
    clientId = ?
");

// configure parameters
$update -> bind_param (
    "ii",
	$clientStatus, $clientId
);

// execute
$update -> execute();

// set variables
$userId = $_SESSION["userId"];
$module = 'Client';
$action = 'Delete';
$itemId = $clientId;

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
	<body class='function-body'>
		<div class='preloader pl-size-xs'>
			<div class='spinner-layer pl-white'>
				<div class='circle-clipper left'>
					<div class='circle'></div>
				</div>
				<div class='circle-clipper right'>
					<div class='circle'></div>
				</div>
			</div>
		</div>
		<script> window.location='../c/client.php?m=list&n=deleted'</script>
</body>
";
