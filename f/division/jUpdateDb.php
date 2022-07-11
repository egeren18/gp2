<?php

// connection

include '../connection.php';

// module

$module = 'division';
$action = 'update';

// var

$divisionName = filter_var($_POST['divisionName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE division
    SET
    divisionName = ?
    WHERE
    divisionId = ?
");	

$update -> bind_param (
    "si",
    $divisionName, $_GET["id"]
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
