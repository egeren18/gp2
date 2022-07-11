<?php

// connect database
include '../connection.php';

// set variables
$clientName = $_POST['clientName'];
$clientNit = $_POST['clientNit'];
$clientAddress = $_POST['clientAddress'];
$clientCity = $_POST['clientCity'];
$clientState = $_POST['clientState'];
$countryId = $_POST['countryId'];
$clientZipCode = $_POST['clientZipCode'];
$clientContact = $_POST['clientContact'];
$clientPhone1 = $_POST['clientPhone1'];
$clientPhone2 = $_POST['clientPhone2'];
$clientEmail = $_POST['clientEmail'];
$clientWebPage = $_POST['clientWebPage'];
$clientObservations = $_POST['clientObservations'];
$clientDate = date('Y');
$clientStatusId = 3;
$riskId = 0;
$validAudit = 0;
$clientStatus = 1;

// insert
$client = $connection -> prepare ("
    INSERT INTO client
    (clientName, clientNit, clientAddress, clientCity, clientState,
    countryId, clientZipCode, clientContact, clientPhone1, clientPhone2,
    clientEmail, clientWebPage, clientObservations, clientDate, clientStatusId,
    riskId, validAudit, clientStatus
)
    VALUES
    (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
");

// configure parameters
$client -> bind_param (
    "sssssissssssssiiii",
    $clientName, $clientNit, $clientAddress, $clientCity, $clientState,
    $countryId, $clientZipCode, $clientContact, $clientPhone1, $clientPhone2,
    $clientEmail, $clientWebPage, $clientObservations, $clientDate, $clientStatusId,
    $riskId, $validAudit, $clientStatus
);

// execute
$client -> execute();

// id
$clientId = $connection -> insert_id;

// set variables
$userId = $_SESSION["userId"];
$module = 'Client';
$action = 'Insert';
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
		<script> window.location='../c/client.php?m=list&n=added'</script>
</body>
";
