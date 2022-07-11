<?php

// connection

include '../connection.php';

// module

$module = 'userSubscriber';
$action = 'update';

// var

$userName = filter_var($_POST['userName'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$userSurname = filter_var($_POST['userSurname'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$userEmail = filter_var($_POST['userEmail'], FILTER_SANITIZE_EMAIL);

// update

$update = $master -> prepare ("
    UPDATE user SET
    userName = ?,
    userSurname = ?,
    userEmail = ?
    WHERE
    userId = ?
");

$update -> bind_param (
    "sssi",
    $userName, $userSurname, $userEmail, $_GET["uid"]
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

echo "<script>window.location='../c/{$module}.php?m=user&sid={$_GET["sid"]}&n=updated'</script>";
