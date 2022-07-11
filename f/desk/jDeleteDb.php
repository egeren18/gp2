<?php
$module = 'categoriaD';
$action = 'delete';

// connection

include '../connection.php';


// var


$id = $_GET["cid"];
$c = 0;

// update

$update = $master -> prepare ("
    UPDATE module
    SET
    cDeskId = ?
    WHERE
    moduleId = ?
");

$update -> bind_param (
    "ii",
    $c, $id
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["pid"]);

$trace -> execute();
// view

echo "<script> window.location='../c/desk.php?m=index&n=deleted&pid={$id}'</script>";
