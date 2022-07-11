<?php

$n = $_GET["n"];

// notify
include '../plugins/toast/toast.php';

// n
switch ($n) {

	case 'error':
		echo $error;
		require_once '../v/main/jLogInEmail.php';
		break;
		
	case 'startProblems':
		echo $startProblems;
		require_once '../v/main/jLogInEmail.php';
		break;

	case 'passwordChanged':
		echo $passwordChanged;
		require_once '../v/main/jLogInEmail.php';
		break;

	case 'unauthorizedAccess':
		echo $unauthorizedAccess;
		require_once '../v/main/jLogInEmail.php';
		break;

	default:
		require_once '../v/main/jLogInEmail.php';
		break;

}
