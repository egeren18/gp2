<?php

// connection

include '../connection.php';

// module

$module = 'civilStatus';
$action = 'update';

// var

$civilStatusName = filter_var($_POST['civilStatusName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE civilstatus
    SET
    civilStatusName = ?
    WHERE
    civilStatusId = ?
");	

$update -> bind_param (
    "si",
    $civilStatusName, $_GET["id"]
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
