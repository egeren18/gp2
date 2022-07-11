<?php

// connection

include '../connection.php';

// module

$module = 'role';
$action = 'update';

// var

$roleName = filter_var($_POST['roleName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE role
    SET
    roleName = ?
    WHERE
    roleId = ?
");	

$update -> bind_param (
    "si",
    $roleName, $_GET["id"]
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
