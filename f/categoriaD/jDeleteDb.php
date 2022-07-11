<?php
$module = 'categoriaD';
$action = 'delete';

// connection

include '../connection.php';


// var

$clientId = $_GET["pid"];
$Id = $_GET["cid"];
$clientStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE categorias
    SET
    categoriasStatus = ?
    WHERE
    categoriasId = ?
");

$update -> bind_param (
    "ii",
    $clientStatus, $clientId
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

echo "<script> window.location='../c/categoriaD.php?m=index&n=deleted&pid={$id}'</script>";
