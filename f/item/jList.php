<?php

// connect database
include '../connection.php';

// set variables
$n = $_GET["n"];
$p = $_GET["p"];

// query
$item = mysqli_query(
    $connection,
    "SELECT * FROM item
    WHERE itemPhase = '" . $p . "'
    AND itemStatus = 1
");

// notify
include '../plugins/toast/toast.php';

switch ($n) {

	case 'added':
		echo $added;
		require_once '../v/item/jList.php';
		break;
	
	case 'updated':
		echo $updated;
		require_once '../v/item/jList.php';
		break;

	case 'deleted':
		echo $deleted;
		require_once '../v/item/jList.php';
		break;

	case 'duplicated':
		echo $duplicated;
		require_once '../v/item/jList.php';
		break;

	default:
		require_once '../v/item/jList.php';
		break;

}
