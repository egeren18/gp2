<?php

// connection

include '../connection.php';
include '../connection2.php';

// module

$module = 'termycond';
$action = 'add';
//declarar variables que se van a utilizar 
// GET
$termycondId = $_GET["termycondId"];
$serviceId = $_GET["serviceId"];
$clientId = $_GET["clientId"];
$ii = 1;

// POST
$amount = $_POST['a'];
$et = $_POST['et'];
$currencyId = $_POST['c'];
$desicion2 = $_POST['group1'];
$horasc = $_POST['b'];

$f1 = $_POST['f1'];
$f2 = $_POST['f2'];

//variables logica ac
$important = isset($_POST['important']) == true ? 1 : NULL;
$statusId = isset($_POST['completed']) == true ? 2 : 1;


$update = $connection-> prepare ("
    UPDATE termycond
    SET
    statusId = ?,
    important = ?
    WHERE
    termycondId	 = ? AND mId = 1
");	

$update -> bind_param    (
    "iii",
   $statusId, $important, $termycondId 
);

$update -> execute();


$update = $master-> prepare ("
    UPDATE cartypreprojecto
    SET
    clientId = ?,
    serviceId = ?,
    amount = ?,
    currencyId = ?,
    termycondId = ?,
    desicion2 = ?,
    horasc = ?
    WHERE
    termycondId	 = ? 
");	

$update -> bind_param    (
    "iiiiiiii",
    $clientId, $serviceId, $amount, $currencyId, $termycondId, $desicion2, $horasc, $termycondId
);

$update -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();
    
    
    //PRIMERA ARCHIVO
    $id = $termycondId;



    $cStatus = 1;
    
    // update

$update = $master -> prepare ("
    UPDATE termycond
    SET
    cStatus = ?,
    currencyId = ?,
    efacturacionText = ?,
    f1 = ?,
    f2 = ?
    WHERE
    termycondId = ?
");	

$update -> bind_param (
    "iisssi",
    $cStatus, $currencyId, $et, $f1, $f2, $termycondId
);

$update -> execute();



    // view

    echo "<script> window.location='../c/{$module}.php?m=list&n=added&cid={$termycondId}&iid=1&clientId={$clientId}&serviceId={$serviceId}'</script>";