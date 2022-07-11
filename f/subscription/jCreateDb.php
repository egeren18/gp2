<?php

// connection

include '../connection.php';

// module

$module = 'subscription';
$action = 'add';

// var

$subscriptionName = filter_var($_POST['subscriptionName'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriptionDays = filter_var($_POST['subscriptionDays'], FILTER_VALIDATE_INT);

// insert

$insert = $master -> prepare ("
    INSERT INTO subscription
    (subscriptionName, subscriptionDays)
    VALUES
    (?,?)
");

$insert -> bind_param (
    "si",
    $subscriptionName, $subscriptionDays
);

$insert -> execute();

$id = $master -> insert_id;

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

$trace -> execute();

// view

echo "<script>window.location='../c/{$module}.php?m=index&n=added'</script>";
