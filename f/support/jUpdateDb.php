<?php

// connect database
include '../connection.php';

// set id
$clientId = $_GET["c"];

// set fields
$clientName = $_POST["clientName"];
$clientNit = $_POST["clientNit"];
$clientAddress = $_POST["clientAddress"];
$clientCity = $_POST["clientCity"];
$clientState = $_POST["clientState"];
$countryId = $_POST["countryId"];
$clientZipCode = $_POST["clientZipCode"];
$clientContact = $_POST["clientContact"];
$clientPhone1 = $_POST["clientPhone1"];
$clientPhone2 = $_POST["clientPhone2"];
$clientEmail = $_POST["clientEmail"];
$clientWebPage = $_POST["clientWebPage"];
$clientObservations = $_POST["clientObservations"];

// update
$update = $connection -> prepare ("
    UPDATE client
    SET
	clientName = ?,
	clientNit = ?,
	clientAddress = ?,
	clientCity = ?,
	clientState = ?,
	countryId = ?,
	clientZipCode = ?,
	clientContact = ?,
	clientPhone1 = ?,
	clientPhone2 = ?,
	clientEmail = ?,
	clientWebPage = ?,
	clientObservations = ?
    WHERE
    clientId = ?
");

// configure parameters
$update -> bind_param (
    "sssssisssssssi",
	$clientName, $clientNit, $clientAddress, $clientCity, $clientState,
	$countryId, $clientZipCode, $clientContact, $clientPhone1, $clientPhone2,
	$clientEmail, $clientWebPage, $clientObservations, $clientId
);

// execute
$update -> execute();

// set variables
$userId = $_SESSION["userId"];
$module = 'Client';
$action = 'Update';
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
		<script> window.location='../c/client.php?m=list&n=updated'</script>
</body>
";
