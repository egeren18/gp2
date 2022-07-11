<?php

// set variables
$c = $_GET["c"];
$n = $_GET["n"];

// notify
include '../plugins/toast/toast.php';

switch ($n) {

	case 'welcome':
		echo $welcome;
		require_once '../v/main/jChangePassword.php';
		break;

	case 'doNotMatch':
		echo $doNotMatch;
		require_once '../v/main/jChangePassword.php';
		break;

	default:
		require_once '../v/main/jChangePassword.php';
		break;

}
