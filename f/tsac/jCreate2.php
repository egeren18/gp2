<?php 
// connection

include '../connection.php';

// module

$module = 'tsac';
$action = 'add';

// var
$serviceId = $_POST['serviceId'];
$acDoerDate = date('d-m-y / g:i a');

// select
$id = $_GET["tsacId"];
$_cp = mysqli_query($master, "
    SELECT * FROM tsac
    WHERE tsacId = '" . $id . "'
");
$cp = $_cp -> fetch_object();

$tsacName = $cp -> tsacName;

$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceStatus = 1
");

// view
require_once '../v/tsac/jCreate2.php';
