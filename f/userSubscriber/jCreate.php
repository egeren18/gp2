<?php

// connection

include '../connection.php';

// module

$module = "userSubscriber";

// select

$_qty = mysqli_query($master, "
    SELECT count(*) as total FROM user
    WHERE subscriberId = '" . $_GET["sid"] . "'
    AND userStatus = 1
");

$qty = mysqli_fetch_array($_qty);

// select

$_subscriber = mysqli_query($master, "
    SELECT * FROM subscriber
    WHERE subscriberId = '" . $_GET["sid"] . "'
");

$subscriber = $_subscriber -> fetch_object();

// view

echo $view = $subscriber -> subscriberUsers > $qty["total"] ? require_once "../v/userSubscriber/jCreate.php" : "<script>window.location='../c/{$module}.php?m=user&sid={$_GET["sid"]}&n=exceeded'</script>" ;
