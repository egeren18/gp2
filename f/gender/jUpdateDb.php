<?php

// connection

include '../connection.php';

// module

$module = 'gender';
$action = 'update';

// var

$genderName = filter_var($_POST['genderName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE gender
    SET
    genderName = ?
    WHERE
    genderId = ?
");	

$update -> bind_param (
    "si",
    $genderName, $_GET["id"]
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
