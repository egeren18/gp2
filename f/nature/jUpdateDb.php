<?php

// connection

include '../connection.php';

// module

$module = 'nature';
$action = 'update';

// var

$natureName = filter_var($_POST['natureName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE nature
    SET
    natureName = ?
    WHERE
    natureId = ?
");	

$update -> bind_param (
    "si",
    $natureName, $_GET["id"]
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
