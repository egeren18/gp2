<?php

// connection

include '../connection.php';
// module

$module = 'categoriaD';
$action = 'update';

// var
$id = $_GET["cid"];
$categoriasName = filter_var($_POST['categoriasName'], FILTER_SANITIZE_STRING);
$categoriasExp = filter_var($_POST['categoriasExp'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE categorias
    SET
    categoriasName = ?,
    categoriasExp = ?
    WHERE
    categoriasId = ?
");	

$update -> bind_param (
    "ssi",
    $categoriasName, $categoriasExp , $_GET["pid"]
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

echo "<script> window.location='../c/{$module}.php?m=list&n=updated&pid={$id}'</script>";
