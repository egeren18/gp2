<?php

// connection

include '../connection.php';

// module

$module = 'modal';
$action = 'update';

// var

$modalName = $_POST['modalName'];
$modalText = $_POST['modalText'];
$consultar = $_POST['consultar'];
$editar = $_POST['editar'];
$eliminar = $_POST['eliminar'];


// update

$update = $master -> prepare ("
    UPDATE modal
    SET
    modalName = ?,
    modalText = ?,
    consultar = ?,
    editar = ?,
    eliminar = ?
    WHERE
    modalId = ?
");	

$update -> bind_param (
    "sssssi",
    $modalName, $modalText, $consultar, $editar, $eliminar, $_GET["id"]
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
