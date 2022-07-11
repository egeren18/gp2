<?php

// connection

include '../connection.php';

// module

$module = 'level';
$action = 'update';

// var

$levelName = filter_var($_POST['levelName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE level
    SET
    levelName = ?
    WHERE
    levelId = ?
");	

$update -> bind_param (
    "si",
    $levelName, $_GET["id"]
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
