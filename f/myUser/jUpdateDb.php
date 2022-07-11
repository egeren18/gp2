<?php

// connection

include '../connection.php';

// module

$module = 'myUser';
$action = 'update';

// var

$userAdmin = $_POST['userAdmin'];

// update

$update = $master -> prepare ("
    UPDATE user SET
    userAdmin = ?
    WHERE
    userId = ?
");

$update -> bind_param (
    "ii",
    $userAdmin, $_GET["id"]
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["uid"]);

$trace -> execute();

// view

echo "<script>window.location='../c/{$module}.php?m=index&n=updated'</script>";
