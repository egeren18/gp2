<?php

// connection

include '../connection.php';

// module

$module = 'department';
$action = 'update';

// var

$departmentName = filter_var($_POST['departmentName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE department
    SET
    departmentName = ?
    WHERE
    departmentId = ?
");	

$update -> bind_param (
    "si",
    $departmentName, $_GET["id"]
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
