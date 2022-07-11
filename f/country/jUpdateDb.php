<?php

// connection

include '../connection.php';

// module

$module = 'country';
$action = 'update';

// var

$countryName = filter_var($_POST['countryName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE country
    SET
    countryName = ?
    WHERE
    countryId = ?
");	

$update -> bind_param (
    "si",
    $countryName, $_GET["id"]
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
