<?php

// connection

include '../connection.php';

// module

$module = 'currency';
$action = 'update';

// var

$currencyName = filter_var($_POST['currencyName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE currency
    SET
    currencyName = ?
    WHERE
    currencyId = ?
");	

$update -> bind_param (
    "si",
    $currencyName, $_GET["id"]
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
