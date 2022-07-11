<?php

// connection

include '../connection.php';

// module

$module = 'risk';
$action = 'update';

// var

$riskName = filter_var($_POST['riskName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE risk
    SET
    riskName = ?
    WHERE
    riskId = ?
");	

$update -> bind_param (
    "si",
    $riskName, $_GET["id"]
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["id"]);

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
