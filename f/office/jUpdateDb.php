<?php

// connection

include '../connection.php';

// module

$module = 'office';
$action = 'update';

// var

$officeName = filter_var($_POST['officeName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE office
    SET
    officeName = ?
    WHERE
    officeId = ?
");	

$update -> bind_param (
    "si",
    $officeName, $_GET["id"]
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
